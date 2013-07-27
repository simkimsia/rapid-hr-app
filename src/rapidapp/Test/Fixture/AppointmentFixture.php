<?php
/**
 * AppointmentFixture
 *
 */
class AppointmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'designation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'directorate' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_of_appointment' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_join_nrf' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_join_civil_service' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'scheme' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8),
		'substantive_grade' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8),
		'divisional_status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8),
		'date_substantive_grade' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'tenure' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gross_salary' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'allowance' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
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
			'designation' => 'Lorem ipsum dolor sit amet',
			'directorate' => 'Lorem ipsum dolor sit amet',
			'date_of_appointment' => '2013-07-27 18:55:29',
			'date_join_nrf' => '2013-07-27 18:55:29',
			'date_join_civil_service' => '2013-07-27 18:55:29',
			'scheme' => 1,
			'substantive_grade' => 1,
			'divisional_status' => 1,
			'date_substantive_grade' => '2013-07-27 18:55:29',
			'tenure' => 'Lorem ipsum dolor ',
			'gross_salary' => 1,
			'allowance' => 1,
			'created' => '2013-07-27 18:55:29',
			'modified' => '2013-07-27 18:55:29',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
