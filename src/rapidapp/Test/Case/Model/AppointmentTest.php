<?php
App::uses('Appointment', 'Model');

/**
 * Appointment Test Case
 *
 */
class AppointmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appointment',
		'app.employee',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
		'app.earned_sponsorship',
		'app.employee_profile',
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
		$this->Appointment = ClassRegistry::init('Appointment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appointment);

		parent::tearDown();
	}

}
