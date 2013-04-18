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
		$this->Agent->recursive = 0;
		$this->set('agents', $this->paginate());
	}

    public function login(){
        $this->layout = 'login';
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
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
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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
}
