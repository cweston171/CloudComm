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
		$contacts = $this->PhoneNumber->Contact->find('list');
		$this->set(compact('contacts'));
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
		$contacts = $this->PhoneNumber->Contact->find('list');
		$this->set(compact('contacts'));
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
		$contacts = $this->PhoneNumber->Contact->find('list');
		$this->set(compact('contacts'));
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
		$contacts = $this->PhoneNumber->Contact->find('list');
		$this->set(compact('contacts'));
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
