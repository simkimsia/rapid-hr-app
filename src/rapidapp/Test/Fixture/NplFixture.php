<?php
/**
 * NplFixture
 *
 */
class NplFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'period' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'employee_id' => 1,
			'order' => 1,
			'period' => '2013-07-27 18:57:50',
			'created' => '2013-07-27 18:57:50',
			'modified' => '2013-07-27 18:57:50',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
