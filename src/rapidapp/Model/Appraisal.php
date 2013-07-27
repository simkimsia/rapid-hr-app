<?php
App::uses('AppModel', 'Model');
/**
 * Appraisal Model
 *
 * @property Employee $Employee
 */
class Appraisal extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cep';


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
