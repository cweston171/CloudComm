<?php
App::uses('ContactPhoneNumber', 'Model');

/**
 * ContactPhoneNumber Test Case
 *
 */
class ContactPhoneNumberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contact_phone_number',
		'app.contact',
		'app.client',
		'app.agent',
		'app.account_action',
		'app.internal_phone_number',
		'app.invoice',
		'app.invoice_item',
		'app.transaction',
		'app.phone_number',
		'app.campaign'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContactPhoneNumber = ClassRegistry::init('ContactPhoneNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactPhoneNumber);

		parent::tearDown();
	}

}
