<?php
App::uses('InvoiceItem', 'Model');

/**
 * InvoiceItem Test Case
 *
 */
class InvoiceItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoice_item',
		'app.invoice',
		'app.client',
		'app.agent',
		'app.account_action',
		'app.internal_phone_number',
		'app.contact',
		'app.phone_number',
		'app.transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvoiceItem = ClassRegistry::init('InvoiceItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvoiceItem);

		parent::tearDown();
	}

}
