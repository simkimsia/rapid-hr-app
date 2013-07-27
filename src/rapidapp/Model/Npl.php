<?php
App::uses('AppModel', 'Model');
/**
 * Npl Model
 *
 * @property Employee $Employee
 */
class Npl extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'period';


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
