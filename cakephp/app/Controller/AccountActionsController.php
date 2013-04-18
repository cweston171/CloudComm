<?php
App::uses('AppController', 'Controller');
/**
 * AccountActions Controller
 *
 * @property AccountAction $AccountAction
 */
class AccountActionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountAction->recursive = 0;
		$this->set('accountActions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AccountAction->exists($id)) {
			throw new NotFoundException(__('Invalid account action'));
		}
		$options = array('conditions' => array('AccountAction.' . $this->AccountAction->primaryKey => $id));
		$this->set('accountAction', $this->AccountAction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountAction->create();
			if ($this->AccountAction->save($this->request->data)) {
				$this->Session->setFlash(__('The account action has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account action could not be saved. Please, try again.'));
			}
		}
		$agents = $this->AccountAction->Agent->find('list');
		$this->set(compact('agents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AccountAction->exists($id)) {
			throw new NotFoundException(__('Invalid account action'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountAction->save($this->request->data)) {
				$this->Session->setFlash(__('The account action has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account action could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AccountAction.' . $this->AccountAction->primaryKey => $id));
			$this->request->data = $this->AccountAction->find('first', $options);
		}
		$agents = $this->AccountAction->Agent->find('list');
		$this->set(compact('agents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AccountAction->id = $id;
		if (!$this->AccountAction->exists()) {
			throw new NotFoundException(__('Invalid account action'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AccountAction->delete()) {
			$this->Session->setFlash(__('Account action deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account action was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AccountAction->recursive = 0;
		$this->set('accountActions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AccountAction->exists($id)) {
			throw new NotFoundException(__('Invalid account action'));
		}
		$options = array('conditions' => array('AccountAction.' . $this->AccountAction->primaryKey => $id));
		$this->set('accountAction', $this->AccountAction->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AccountAction->create();
			if ($this->AccountAction->save($this->request->data)) {
				$this->Session->setFlash(__('The account action has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account action could not be saved. Please, try again.'));
			}
		}
		$agents = $this->AccountAction->Agent->find('list');
		$this->set(compact('agents'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AccountAction->exists($id)) {
			throw new NotFoundException(__('Invalid account action'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountAction->save($this->request->data)) {
				$this->Session->setFlash(__('The account action has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account action could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AccountAction.' . $this->AccountAction->primaryKey => $id));
			$this->request->data = $this->AccountAction->find('first', $options);
		}
		$agents = $this->AccountAction->Agent->find('list');
		$this->set(compact('agents'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AccountAction->id = $id;
		if (!$this->AccountAction->exists()) {
			throw new NotFoundException(__('Invalid account action'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AccountAction->delete()) {
			$this->Session->setFlash(__('Account action deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account action was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
