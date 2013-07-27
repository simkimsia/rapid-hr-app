<?php
App::uses('Qualification', 'Model');

/**
 * Qualification Test Case
 *
 */
class QualificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qualification',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
		'app.earned_sponsorship',
		'app.employee_profile',
		'app.medical_screening',
		'app.npl',
		'app.outflow',
		'app.security_screening'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Qualification = ClassRegistry::init('Qualification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Qualification);

		parent::tearDown();
	}

}
