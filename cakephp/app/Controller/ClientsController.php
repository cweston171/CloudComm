<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
		$this->set('client', $this->Client->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
			$this->request->data = $this->Client->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Client->delete()) {
			$this->Session->setFlash(__('Client deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
    
    /* Purchase User Licenses */
    public function purchase_licenses() {
        /* Must be logged in */
        if(!$this->isLoggedIn()) {
            $this->Session->setFlash(__('You must be logged in. Please log in below to continue.'), 'default', array(), 'bad');
            $this->redirect(array('controller'=>'agents', 'action'=>'login'));           
        }
        /* Must be Admin */
        if(!$this->Session->read('Agent.role') == "Admin") {
            $this->Session->setFlash(__('You must be an Admin to access this page.'));
            $this->redirect(array('controller'=>'agents','action'=>'dashboard'));            
        }
        
        /* Get Billing Data */
        $options = array('conditions' => array('Client.' . $this->Client->primaryKey => $this->Session->read('Agent.client_id')));
        $client = $this->Client->find('first', $options);
        $this->set('client', $client);
        
        if ($this->request->is('post') || $this->request->is('put')) {
            /* Calculate Line Item Price */
            $lineItemSubTotal = number_format($client['Client']['license_fee'] * $this->request->data('Client.purchase_qty'),2);

            /* Create Invoice */
            $invoiceDataArray = array(
                'Invoice' => array(
                    'client_id' => $this->Session->read('Agent.client_id'),
                    'name' => 'Additional Agent License Purchase',
                    'status' => 1,
                    'due_date' => date('Y-m-d'),
                ),
                'InvoiceItem' => array(
                    array(
                        'name' => 'Agent License',
                        'price_per_unit' => number_format($client['Client']['license_fee']),
                        'unit_qty' => $this->request->data('Client.purchase_qty'),
                        'tax' => "0.00",
                        'status' => 1,
                        'line_item_total' => $lineItemSubTotal
                    )
                )
            );
            if($this->Client->Invoice->saveAssociated($invoiceDataArray)) {
                /* Attempt Charge */
                $this->AuthorizeNet = $this->Components->load('AuthorizeNet');
                $custInfo = array(
                    'first_name'    => $client['Client']['billing_first_name'],
                    'last_name'     => $client['Client']['billing_last_name'],
                    'address'       => $client['Client']['billing_street'],
                    'city'          => $client['Client']['billing_city'],
                    'state'         => $client['Client']['billing_state'],
                    'zip'           => $client['Client']['billing_postcode'],
                    'country'       => $client['Client']['billing_country'],
                    'company'       => $client['Client']['name']
                );
                $chargeResponse = $this->AuthorizeNet->chargeCard(Configure::read('authNet.development.loginId'),Configure::read('authNet.development.transKey'),'AUTH_CAPTURE','',$client['Client']['credit_card_number'],$client['Client']['credit_card_expiration_month'],$client['Client']['credit_card_expiration_year'],'','',$lineItemSubTotal,'0.00','0.00','Additional Agent License Purchase',$custInfo,$client['Client']['email'],$client['Client']['billing_phone'],$client['Client']['billing_fax'],$custInfo,$this->Session->read('Agent.client_id'),'127.0.0.1',$this->Client->Invoice->id);
                //debug($chargeResponse);
                /* Evalute Charge Response */
                if($chargeResponse[0] == 1)
                {
                    /* Charge Successful */
                    $transactionDataArray = array(
                        'Transaction' => array(
                            'invoice_id'        => $this->Client->Invoice->id,
                            'client_id'         => $this->Session->read('Agent.client_id'),
                            'amount'            => $lineItemSubTotal,
                            'transaction_num'   => $chargeResponse[6],
                            'type'              => 1,
                            'method'            => 1
                        )
                    );
                    if($this->Client->Transaction->save($transactionDataArray))
                    {
                        /* Charge Successful */
                        /* Add credits to clients account */
                        $this->Client->id = $this->Session->read('Agent.client_id');
                        if($this->Client->saveField('license_count',$client['Client']['license_count'] + $this->request->data('Client.purchase_qty'))) {
                            $this->Session->setFlash(__('Credits Added Successfully!','notification'));
                            $this->redirect(array('controller'=>'agents','action'=>'add'));                        
                        }
                        else
                        {
                            /* Failed to update license count! */
                            throw new InternalErrorException(__('Unable to update license count.'));
                        }
                    }
                    else
                    {
                        /* Failed - Unable to save transaction! */
                        throw new InternalErrorException(__('Unable to save payment transaction!.'));
                    }
                }
                else
                {
                    /* Charge Failed */
                    $this->Session->setFlash(__('Charge Declined. Please try again.','error'));
                    $this->redirect(array('controller'=>'invoices','action'=>'view'));
                }
                exit;
            } else {
                throw new InternalErrorException(__('Unable to create invoice.'));                    
            }
            
        } else {
            
        }
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
		$this->set('client', $this->Client->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
			$this->request->data = $this->Client->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Client->delete()) {
			$this->Session->setFlash(__('Client deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
