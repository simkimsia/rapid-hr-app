<?php
App::uses('AttendedCourse', 'Model');

/**
 * AttendedCourse Test Case
 *
 */
class AttendedCourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attended_course',
		'app.employee',
		'app.appointment',
		'app.appraisal',
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
		$this->AttendedCourse = ClassRegistry::init('AttendedCourse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttendedCourse);

		parent::tearDown();
	}

}
