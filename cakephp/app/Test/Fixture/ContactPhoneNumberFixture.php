<?php
/**
 * ContactPhoneNumberFixture
 *
 */
class ContactPhoneNumberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'is_mobile' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'is_dnc' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
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
			'contact_id' => 1,
			'number' => 1,
			'is_mobile' => 1,
			'created' => '2013-06-12 20:40:09',
			'modified' => '2013-06-12 20:40:09',
			'is_dnc' => 1
		),
	);

}
