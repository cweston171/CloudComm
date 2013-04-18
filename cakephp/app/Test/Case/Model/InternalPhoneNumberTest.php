<?php
App::uses('InternalPhoneNumber', 'Model');

/**
 * InternalPhoneNumber Test Case
 *
 */
class InternalPhoneNumberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.internal_phone_number',
		'app.client',
		'app.agent',
		'app.account_action',
		'app.contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InternalPhoneNumber = ClassRegistry::init('InternalPhoneNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InternalPhoneNumber);

		parent::tearDown();
	}

}
