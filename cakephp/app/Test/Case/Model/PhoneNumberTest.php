<?php
App::uses('PhoneNumber', 'Model');

/**
 * PhoneNumber Test Case
 *
 */
class PhoneNumberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.phone_number',
		'app.client',
		'app.agent',
		'app.account_action',
		'app.internal_phone_number',
		'app.contact',
		'app.invoice',
		'app.invoice_item',
		'app.transaction',
		'app.campaign'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhoneNumber = ClassRegistry::init('PhoneNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhoneNumber);

		parent::tearDown();
	}

}
