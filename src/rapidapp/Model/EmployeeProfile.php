<?php
App::uses('AppModel', 'Model');
/**
 * EmployeeProfile Model
 *
 * @property Employee $Employee
 */
class EmployeeProfile extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'full_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
