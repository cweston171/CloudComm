<?php
App::uses('AppController', 'Controller');
/**
 * PhoneNumbers Controller
 *
 * @property PhoneNumber $PhoneNumber
 */
class PhoneNumbersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PhoneNumber->recursive = 0;
		$this->set('phoneNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		$options = array('conditions' => array('PhoneNumber.' . $this->PhoneNumber->primaryKey => $id));
		$this->set('phoneNumber', $this->PhoneNumber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PhoneNumber->create();
			if ($this->PhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone number could not be saved. Please, try again.'));
			}
		}
        
        /* Initiate Twilio Client */
        App::import('Vendor', 'twilio-php'.DS.'Services'.DS.'Twilio');
        $twilioClient = new Services_Twilio(Configure::read('Twilio.development.sid'),Configure::read('Twilio.development.authToken'));
        
        var_dump($twilioClient);exit;
        
        if($twilioClient)
        {
            $numbers = $twilioClient->account->available_phone_numbers->getList('US', 'Local', array(
                    "AreaCode" => "518"
                ));
            foreach($numbers->available_phone_numbers as $number) {
                echo $number->phone_number;
            }
        }
        else
        {
            die("Unable to load Twilio SDK!");
        }
        
        
        
		$clients = $this->PhoneNumber->Client->find('list');
		$agents = $this->PhoneNumber->Agent->find('list');
		$campaigns = $this->PhoneNumber->Campaign->find('list');
		$this->set(compact('clients', 'agents', 'campaigns'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PhoneNumber.' . $this->PhoneNumber->primaryKey => $id));
			$this->request->data = $this->PhoneNumber->find('first', $options);
		}
		$clients = $this->PhoneNumber->Client->find('list');
		$agents = $this->PhoneNumber->Agent->find('list');
		$campaigns = $this->PhoneNumber->Campaign->find('list');
		$this->set(compact('clients', 'agents', 'campaigns'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PhoneNumber->id = $id;
		if (!$this->PhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PhoneNumber->delete()) {
			$this->Session->setFlash(__('Phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PhoneNumber->recursive = 0;
		$this->set('phoneNumbers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		$options = array('conditions' => array('PhoneNumber.' . $this->PhoneNumber->primaryKey => $id));
		$this->set('phoneNumber', $this->PhoneNumber->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PhoneNumber->create();
			if ($this->PhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone number could not be saved. Please, try again.'));
			}
		}
		$clients = $this->PhoneNumber->Client->find('list');
		$agents = $this->PhoneNumber->Agent->find('list');
		$campaigns = $this->PhoneNumber->Campaign->find('list');
		$this->set(compact('clients', 'agents', 'campaigns'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PhoneNumber.' . $this->PhoneNumber->primaryKey => $id));
			$this->request->data = $this->PhoneNumber->find('first', $options);
		}
		$clients = $this->PhoneNumber->Client->find('list');
		$agents = $this->PhoneNumber->Agent->find('list');
		$campaigns = $this->PhoneNumber->Campaign->find('list');
		$this->set(compact('clients', 'agents', 'campaigns'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PhoneNumber->id = $id;
		if (!$this->PhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PhoneNumber->delete()) {
			$this->Session->setFlash(__('Phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
