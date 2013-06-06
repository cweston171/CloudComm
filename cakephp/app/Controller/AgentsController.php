<?php
App::uses('AppController', 'Controller');
/**
 * Agents Controller
 *
 * @property Agent $Agent
 */
class AgentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->autoRender = false;
        $this->redirect(array('controller'=>'agents','action'=>'dashboard'));
	}

    
    public function login(){
        $this->layout = 'login';
        
        if($this->request->is('post'))
        {
            // Check Agent Login Details
            $queryOptions = array(
                'conditions' => array(
                    'Agent.username' => $this->request->data['Agent']['username'],
                    'Agent.password' => $this->request->data['Agent']['password']
                ),
                'fields' => array(
                    'Agent.id',
                    'Agent.client_id',
                    'Agent.first_name',
                    'Agent.last_name',
                    'Agent.email',
                    'Agent.extension',
                    'Agent.username',
                    'Agent.can_change_password',
                    'Agent.must_change_password',
                    'Agent.facebook_name',
                    'Agent.twitter_name',
                    'Agent.linkedin_name',
                    'Agent.role',
                    'Agent.is_active'
                ),
                'recursive' => -1                
            );
            if($agentData = $this->Agent->find('first',$queryOptions)) {
                // Login Succeeded.  Check that account is active
                if($agentData['Agent']['is_active'])
                {
                    // Account is active.  Make sure Client account is active as well.
                    $queryOptions = array(
                        'conditions' => array(
                            'Client.id' => $agentData['Agent']['client_id']
                        ),
                        'fields' => array(
                            'Client.name',
                            'Client.active'
                        ),
                        'recursive' => -1
                    );
                    if($clientData = $this->Agent->Client->find('first',$queryOptions))
                    {
                        // Found Client - Check if active
                        if($clientData['Client']['active'])
                        {                            
                            // Set Agent Info in Session for quick access
                            foreach($agentData as $key=>$value) {
                                $this->Session->write($key,$value);
                            }
                            foreach($clientData as $key=>$value) {
                                $this->Session->write($key,$value);
                            }
                            $this->Session->write('Agent.loginId',md5($this->Session->id()));
                            $this->Session->write('Agent.sessionid',$this->Session->id());
                            // Mark the action in the log table
                            $this->Agent->AccountAction->set(array(
                                'agent_id' => $agentData['Agent']['id'],
                                'resource_used' => 'Authentication System',
                                'action_taken'  => 'Login',
                                'notes' => 'Login Session #' . $this->Session->read('Agent.loginId'),
                                'current_ip' => env('REMOTE_ADDR')
                            ));
                           $this->Agent->AccountAction->save();
                           
                           // Redirect to dashboard
                           $this->redirect(array('controller'=>'agents','action'=>'dashboard'));         
                            
                        } else {
                            // Client Record NOT active - kick back error
                            $this->Session->setFlash(__('There is a problem with your account. Please have your administrator contact us for resolution.'), 'default', array(), 'bad');
                        }
                    }
                    else
                    {
                        // Error while querying for Client info.
                        throw new NotFoundException(__('Technical Error. Please try again later.'));
                        
                        // send error to bug software
                    }
                }
                else
                {
                    // Account is not active. Kick back error
                    $this->Session->setFlash(__('Your account has been suspended. Please contact your administrator.'), 'default', array(), 'bad');
                }               
            } else {
                // Login Authentication failed. Kick back error
                $this->Session->setFlash(__("Invalid Username / Password. Please try again."));
            }
        } else {
            //$this->Session->setFlash(__('Please login to continue.'));
        }
        $this->set('title_for_layout', "Login ");
    }
    
    public function logout() {
        $this->autoRender = false;
        
        // Mark action in agent log
        $this->Agent->AccountAction->set(array(
            'agent_id' => $this->Session->read('Agent.id'),
            'resource_used' => 'Authentication System',
            'action_taken'  => 'Log Out',
            'notes' => 'Manual Logout of Session #' . $this->Session->read('Agent.loginId'),
            'current_ip' => env('REMOTE_ADDR')
        ));
        $this->Agent->AccountAction->save();        
        
        $this->Session->destroy();
        $this->Session->setFlash(__('You have been logged out. Goodbye.'), 'default', array(), 'good');
        $this->redirect(array('controller'=>'agents', 'action'=>'login'));
    }
    
    /* Dashboard */
    public function dashboard() {
        /* Must be logged in */
        if(!$this->isLoggedIn()) {
            $this->Session->setFlash(__('You must be logged in. Please log in below to continue.'), 'default', array(), 'bad');
            $this->redirect(array('controller'=>'agents', 'action'=>'login'));
        }
        $this->set('session',$this->Session->read());        
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
        /* Must be logged in */
        if(!$this->isLoggedIn()) {
            $this->Session->setFlash(__('You must be logged in. Please log in below to continue.'), 'default', array(), 'bad');
            $this->redirect(array('controller'=>'agents', 'action'=>'login'));           
        }
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
		$this->set('agent', $this->Agent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        $this->set('title_for_layout', 'Add New Agent');
        
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
        
		if ($this->request->is('post')) {
			$this->Agent->create();
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved'));
				$this->redirect(array('action' => 'manager'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		}
		
        // Set Role Drop Down
        $roles = array('Admin'=>'Admin', 'Supervisor'=>'Supervisor', 'Agent'=>'Agent');
        $this->set('roles',$roles);
        
        // Set Available Extensions
        $extensionConditions = array(
            'conditions' => array(
                'Agent.client_id' => $this->Session->read('Agent.client_id')
            ),
            'fields' => array('Agent.extension'),
            'recursive' => -1
        );
        $takenExtensions = $this->Agent->find('all',$extensionConditions);
        
        foreach ($takenExtensions as $key=>$value)
        {
            $takenExtensionsArray[] = $value['Agent']['extension'];
        }
        
        $x = 1000;
        while($x <= 9999)
        {
            if(!in_array($x,$takenExtensionsArray))
            {
                $availableExtensions[$x] = $x;
            }                        
            $x++;
        }
        $this->set('availableExtensions', $availableExtensions);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        /* Must be logged in */
        if(!$this->isLoggedIn()) {
            $this->Session->setFlash(__('You must be logged in. Please log in below to continue.'), 'default', array(), 'bad');
            $this->redirect(array('controller'=>'agents', 'action'=>'login'));           
        }
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
		}
		$clients = $this->Agent->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
        /* Must be logged in */
        if(!$this->isLoggedIn()) {
            $this->Session->setFlash(__('You must be logged in. Please log in below to continue.'), 'default', array(), 'bad');
            $this->redirect(array('controller'=>'agents', 'action'=>'login'));           
        }
		$this->Agent->id = $id;
		if (!$this->Agent->exists()) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agent->delete()) {
			$this->Session->setFlash(__('Agent deleted'));
			$this->redirect(array('action' => 'manager'));
		}
		$this->Session->setFlash(__('Agent was not deleted'));
		$this->redirect(array('action' => 'manager'));
	}
    
    
    public function manager() {
        $this->set('title_for_layout', 'Agents Manager');
        
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
        
        /* Display agents only for their company */
        $this->paginate = array(
            'conditions' => array('Agent.client_id' => $this->Session->read('Agent.client_id')),
            'recursive' => -1                
        );
        $this->set('agents', $this->paginate());
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Agent->recursive = 0;
		$this->set('agents', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
		$this->set('agent', $this->Agent->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Agent->create();
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Agent->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
		}
		$clients = $this->Agent->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Agent->id = $id;
		if (!$this->Agent->exists()) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agent->delete()) {
			$this->Session->setFlash(__('Agent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Agent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    /**
     * partials
     */
    public function summary(){
        $this->layout = "empty";
        /* Must be logged in */
        if(!$this->isLoggedIn()) {
            $this->Session->setFlash(__('You must be logged in. Please log in below to continue.'), 'default', array(), 'bad');
            $this->redirect(array('controller'=>'agents', 'action'=>'login'));
        }
        $this->set('session',$this->Session->read());
    }
}
