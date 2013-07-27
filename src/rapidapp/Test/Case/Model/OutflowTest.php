<?php
App::uses('Outflow', 'Model');

/**
 * Outflow Test Case
 *
 */
class OutflowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.outflow',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
		'app.earned_sponsorship',
		'app.employee_profile',
		'app.medical_screening',
		'app.npl',
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
		$this->Outflow = ClassRegistry::init('Outflow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Outflow);

		parent::tearDown();
	}

}
