<?php
App::uses('SecurityScreening', 'Model');

/**
 * SecurityScreening Test Case
 *
 */
class SecurityScreeningTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.security_screening',
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
		'app.qualification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SecurityScreening = ClassRegistry::init('SecurityScreening');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SecurityScreening);

		parent::tearDown();
	}

}
