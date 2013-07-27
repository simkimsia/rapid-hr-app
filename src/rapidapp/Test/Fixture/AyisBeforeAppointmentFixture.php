<?php
/**
 * AyisBeforeAppointmentFixture
 *
 */
class AyisBeforeAppointmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'appointment_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'ns' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'higher_education' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'work_experience' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'appointment_id' => 1,
			'ns' => '2013-07-27 18:56:25',
			'higher_education' => '2013-07-27 18:56:25',
			'work_experience' => '2013-07-27 18:56:25',
			'created' => '2013-07-27 18:56:25',
			'modified' => '2013-07-27 18:56:25',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
