<?php
App::uses('AccountAction', 'Model');

/**
 * AccountAction Test Case
 *
 */
class AccountActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.account_action',
		'app.agent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountAction = ClassRegistry::init('AccountAction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountAction);

		parent::tearDown();
	}

}
