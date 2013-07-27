<?php
App::uses('AppModel', 'Model');
/**
 * Appointment Model
 *
 * @property Employee $Employee
 */
class Appointment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'designation';


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
