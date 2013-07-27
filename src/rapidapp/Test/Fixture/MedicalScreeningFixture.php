<?php
/**
 * MedicalScreeningFixture
 *
 */
class MedicalScreeningFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_medical_status' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_medical_review' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'status' => 'Lorem ipsum dolor sit amet',
			'date_medical_status' => '2013-07-27 18:57:25',
			'date_medical_review' => '2013-07-27 18:57:25',
			'created' => '2013-07-27 18:57:25',
			'modified' => '2013-07-27 18:57:25',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
