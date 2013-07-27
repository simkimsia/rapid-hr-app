<?php
/**
 * AppraisalFixture
 *
 */
class AppraisalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'first_6_month_confirmation' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'second_6_month_confirmation' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cep' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8),
		'perf_grade' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8),
		'date_cep_perf' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'first_6_month_confirmation' => '2013-07-27 18:55:51',
			'second_6_month_confirmation' => '2013-07-27 18:55:51',
			'cep' => 1,
			'perf_grade' => 1,
			'date_cep_perf' => '2013-07-27 18:55:51',
			'created' => '2013-07-27 18:55:51',
			'modified' => '2013-07-27 18:55:51',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
