<?php
App::uses('Agent', 'Model');

/**
 * Agent Test Case
 *
 */
class AgentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agent',
		'app.client',
		'app.account_action',
		'app.internal_phone_number'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Agent = ClassRegistry::init('Agent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Agent);

		parent::tearDown();
	}

}
