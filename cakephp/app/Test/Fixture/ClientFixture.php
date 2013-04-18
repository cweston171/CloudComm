<?php
/**
 * ClientFixture
 *
 */
class ClientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'license_fee' => array('type' => 'float', 'null' => false, 'default' => '55.00', 'length' => '5,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'license_count' => array('type' => 'integer', 'null' => false, 'default' => null),
		'credit_card_number' => array('type' => 'integer', 'null' => true, 'default' => null),
		'credit_card_expiration_month' => array('type' => 'integer', 'null' => true, 'default' => null),
		'credit_card_expiration_year' => array('type' => 'integer', 'null' => true, 'default' => null),
		'billing_street' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'billing_city' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'billing_state' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'billing_postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'billing_country' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'license_fee' => 1,
			'created' => '2013-04-16 21:01:01',
			'modified' => '2013-04-16 21:01:01',
			'license_count' => 1,
			'credit_card_number' => 1,
			'credit_card_expiration_month' => 1,
			'credit_card_expiration_year' => 1,
			'billing_street' => 'Lorem ipsum dolor sit amet',
			'billing_city' => 'Lorem ipsum dolor sit amet',
			'billing_state' => 'Lorem ipsum dolor sit amet',
			'billing_postcode' => 'Lorem ipsum dolor sit amet',
			'billing_country' => 'Lorem ipsum dolor sit amet',
			'active' => 1
		),
	);

}
