<?php
App::uses('AyisBeforeAppointment', 'Model');

/**
 * AyisBeforeAppointment Test Case
 *
 */
class AyisBeforeAppointmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ayis_before_appointment',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
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
		$this->AyisBeforeAppointment = ClassRegistry::init('AyisBeforeAppointment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AyisBeforeAppointment);

		parent::tearDown();
	}

}
