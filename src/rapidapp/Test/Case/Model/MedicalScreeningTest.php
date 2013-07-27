<?php
App::uses('MedicalScreening', 'Model');

/**
 * MedicalScreening Test Case
 *
 */
class MedicalScreeningTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.medical_screening',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
		'app.earned_sponsorship',
		'app.employee_profile',
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
		$this->MedicalScreening = ClassRegistry::init('MedicalScreening');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedicalScreening);

		parent::tearDown();
	}

}
