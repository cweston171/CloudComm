<?php
App::uses('AppController', 'Controller');
/**
 * ContactPhoneNumbers Controller
 *
 * @property ContactPhoneNumber $ContactPhoneNumber
 */
class ContactPhoneNumbersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactPhoneNumber->recursive = 0;
		$this->set('contactPhoneNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid contact phone number'));
		}
		$options = array('conditions' => array('ContactPhoneNumber.' . $this->ContactPhoneNumber->primaryKey => $id));
		$this->set('contactPhoneNumber', $this->ContactPhoneNumber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactPhoneNumber->create();
			if ($this->ContactPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The contact phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact phone number could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->ContactPhoneNumber->Contact->find('list');
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
		if (!$this->ContactPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid contact phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The contact phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact phone number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactPhoneNumber.' . $this->ContactPhoneNumber->primaryKey => $id));
			$this->request->data = $this->ContactPhoneNumber->find('first', $options);
		}
		$contacts = $this->ContactPhoneNumber->Contact->find('list');
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
		$this->ContactPhoneNumber->id = $id;
		if (!$this->ContactPhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid contact phone number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactPhoneNumber->delete()) {
			$this->Session->setFlash(__('Contact phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContactPhoneNumber->recursive = 0;
		$this->set('contactPhoneNumbers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ContactPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid contact phone number'));
		}
		$options = array('conditions' => array('ContactPhoneNumber.' . $this->ContactPhoneNumber->primaryKey => $id));
		$this->set('contactPhoneNumber', $this->ContactPhoneNumber->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContactPhoneNumber->create();
			if ($this->ContactPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The contact phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact phone number could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->ContactPhoneNumber->Contact->find('list');
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
		if (!$this->ContactPhoneNumber->exists($id)) {
			throw new NotFoundException(__('Invalid contact phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactPhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The contact phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact phone number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactPhoneNumber.' . $this->ContactPhoneNumber->primaryKey => $id));
			$this->request->data = $this->ContactPhoneNumber->find('first', $options);
		}
		$contacts = $this->ContactPhoneNumber->Contact->find('list');
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
		$this->ContactPhoneNumber->id = $id;
		if (!$this->ContactPhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid contact phone number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactPhoneNumber->delete()) {
			$this->Session->setFlash(__('Contact phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
