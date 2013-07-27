<?php
/**
 * SecurityScreeningFixture
 *
 */
class SecurityScreeningFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'cat1_status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'date_cat1' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_cat1_review' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cat2_status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
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
			'cat1_status' => 1,
			'date_cat1' => '2013-07-27 18:58:47',
			'date_cat1_review' => '2013-07-27 18:58:47',
			'cat2_status' => 1,
			'created' => '2013-07-27 18:58:47',
			'modified' => '2013-07-27 18:58:47',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
