<?php
/**
 * InvoiceItemFixture
 *
 */
class InvoiceItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'invoice_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'price_per_unit' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'unit_qty' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tax' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'comment' => '1=active,2=cancelled'),
		'line_item_total' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-06-10 20:00:47',
			'modified' => '2013-06-10 20:00:47',
			'price_per_unit' => 1,
			'unit_qty' => 1,
			'tax' => 1,
			'status' => 1,
			'line_item_total' => 1
		),
	);

}
