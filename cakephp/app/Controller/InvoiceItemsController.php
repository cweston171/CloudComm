<?php
App::uses('AppController', 'Controller');
/**
 * InvoiceItems Controller
 *
 * @property InvoiceItem $InvoiceItem
 */
class InvoiceItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InvoiceItem->recursive = 0;
		$this->set('invoiceItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InvoiceItem->exists($id)) {
			throw new NotFoundException(__('Invalid invoice item'));
		}
		$options = array('conditions' => array('InvoiceItem.' . $this->InvoiceItem->primaryKey => $id));
		$this->set('invoiceItem', $this->InvoiceItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InvoiceItem->create();
			if ($this->InvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice item could not be saved. Please, try again.'));
			}
		}
		$invoices = $this->InvoiceItem->Invoice->find('list');
		$this->set(compact('invoices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InvoiceItem->exists($id)) {
			throw new NotFoundException(__('Invalid invoice item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InvoiceItem.' . $this->InvoiceItem->primaryKey => $id));
			$this->request->data = $this->InvoiceItem->find('first', $options);
		}
		$invoices = $this->InvoiceItem->Invoice->find('list');
		$this->set(compact('invoices'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InvoiceItem->id = $id;
		if (!$this->InvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid invoice item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InvoiceItem->delete()) {
			$this->Session->setFlash(__('Invoice item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Invoice item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->InvoiceItem->recursive = 0;
		$this->set('invoiceItems', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->InvoiceItem->exists($id)) {
			throw new NotFoundException(__('Invalid invoice item'));
		}
		$options = array('conditions' => array('InvoiceItem.' . $this->InvoiceItem->primaryKey => $id));
		$this->set('invoiceItem', $this->InvoiceItem->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->InvoiceItem->create();
			if ($this->InvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice item could not be saved. Please, try again.'));
			}
		}
		$invoices = $this->InvoiceItem->Invoice->find('list');
		$this->set(compact('invoices'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->InvoiceItem->exists($id)) {
			throw new NotFoundException(__('Invalid invoice item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InvoiceItem.' . $this->InvoiceItem->primaryKey => $id));
			$this->request->data = $this->InvoiceItem->find('first', $options);
		}
		$invoices = $this->InvoiceItem->Invoice->find('list');
		$this->set(compact('invoices'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->InvoiceItem->id = $id;
		if (!$this->InvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid invoice item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InvoiceItem->delete()) {
			$this->Session->setFlash(__('Invoice item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Invoice item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
