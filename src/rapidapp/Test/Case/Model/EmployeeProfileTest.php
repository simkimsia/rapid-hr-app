<?php
App::uses('EmployeeProfile', 'Model');

/**
 * EmployeeProfile Test Case
 *
 */
class EmployeeProfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employee_profile',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
		'app.earned_sponsorship',
		'app.medical_screening',
		'app.npl',
		'app.outflow',
		'app.qualification',
		'app.security_screening'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployeeProfile = ClassRegistry::init('EmployeeProfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployeeProfile);

		parent::tearDown();
	}

}
