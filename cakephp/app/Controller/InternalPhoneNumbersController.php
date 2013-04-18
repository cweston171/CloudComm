<?php
App::uses('AppController', 'Controller');
/**
 * InternalPhoneNumbers Controller
 *
 * @property InternalPhoneNumber $InternalPhoneNumber
 */
class InternalPhoneNumbersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InternalPhoneNumber->recursive = 0;
		$this->set('internalPhoneNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InternalPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid internal phone number'));
		}
		$options = array('conditions' => array('InternalPhoneNumber.' . $this->InternalPhoneNumber->primaryKey => $id));
		$this->set('internalPhoneNumber', $this->InternalPhoneNumber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InternalPhoneNumber->create();
			if ($this->InternalPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The internal phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The internal phone number could not be saved. Please, try again.'));
			}
		}
		$clients = $this->InternalPhoneNumber->Client->find('list');
		$agents = $this->InternalPhoneNumber->Agent->find('list');
		$this->set(compact('clients', 'agents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InternalPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid internal phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InternalPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The internal phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The internal phone number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InternalPhoneNumber.' . $this->InternalPhoneNumber->primaryKey => $id));
			$this->request->data = $this->InternalPhoneNumber->find('first', $options);
		}
		$clients = $this->InternalPhoneNumber->Client->find('list');
		$agents = $this->InternalPhoneNumber->Agent->find('list');
		$this->set(compact('clients', 'agents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InternalPhoneNumber->id = $id;
		if (!$this->InternalPhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid internal phone number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InternalPhoneNumber->delete()) {
			$this->Session->setFlash(__('Internal phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Internal phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->InternalPhoneNumber->recursive = 0;
		$this->set('internalPhoneNumbers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->InternalPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid internal phone number'));
		}
		$options = array('conditions' => array('InternalPhoneNumber.' . $this->InternalPhoneNumber->primaryKey => $id));
		$this->set('internalPhoneNumber', $this->InternalPhoneNumber->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->InternalPhoneNumber->create();
			if ($this->InternalPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The internal phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The internal phone number could not be saved. Please, try again.'));
			}
		}
		$clients = $this->InternalPhoneNumber->Client->find('list');
		$agents = $this->InternalPhoneNumber->Agent->find('list');
		$this->set(compact('clients', 'agents'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->InternalPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid internal phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InternalPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The internal phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The internal phone number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InternalPhoneNumber.' . $this->InternalPhoneNumber->primaryKey => $id));
			$this->request->data = $this->InternalPhoneNumber->find('first', $options);
		}
		$clients = $this->InternalPhoneNumber->Client->find('list');
		$agents = $this->InternalPhoneNumber->Agent->find('list');
		$this->set(compact('clients', 'agents'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->InternalPhoneNumber->id = $id;
		if (!$this->InternalPhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid internal phone number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InternalPhoneNumber->delete()) {
			$this->Session->setFlash(__('Internal phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Internal phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
