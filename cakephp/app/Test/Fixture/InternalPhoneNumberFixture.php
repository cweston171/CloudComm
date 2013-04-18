<?php
/**
 * InternalPhoneNumberFixture
 *
 */
class InternalPhoneNumberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'agent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'sms_enabled' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => null),
		'country' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'client_id' => 1,
			'agent_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'number' => 1,
			'sms_enabled' => 1,
			'created' => '2013-04-16 20:57:38',
			'modified' => '2013-04-16 20:57:38',
			'is_active' => 1,
			'type' => 1,
			'country' => 'L'
		),
	);

}
