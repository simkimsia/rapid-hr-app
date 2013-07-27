<?php
/**
 * AttendedCourseFixture
 *
 */
class AttendedCourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'course_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'course_hours' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cost' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
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
			'course_title' => 'Lorem ipsum dolor sit amet',
			'course_hours' => 1,
			'start_date' => '2013-07-27 18:56:08',
			'end_date' => '2013-07-27 18:56:08',
			'cost' => 1,
			'created' => '2013-07-27 18:56:08',
			'modified' => '2013-07-27 18:56:08',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
