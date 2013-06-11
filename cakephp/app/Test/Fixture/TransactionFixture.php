<?php
/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'invoice_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'transaction_num' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'type' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'comment' => '1=credit,2=refund'),
		'method' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'comment' => '1=authnet,2=paypal,3=google checkout'),
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
			'invoice_id' => 1,
			'client_id' => 1,
			'amount' => 1,
			'transaction_num' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-06-10 20:01:48',
			'modified' => '2013-06-10 20:01:48',
			'type' => 1,
			'method' => 1
		),
	);

}
