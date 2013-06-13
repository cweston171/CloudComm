<?php
/**
 * PhoneNumberFixture
 *
 */
class PhoneNumberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'agent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'campaign_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'campaign_id' => 1,
			'number' => 1,
			'sms_enabled' => 1,
			'created' => '2013-06-12 20:39:32',
			'modified' => '2013-06-12 20:39:32',
			'is_active' => 1,
			'type' => 1,
			'country' => 'L'
		),
	);

}
