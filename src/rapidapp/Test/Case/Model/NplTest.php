<?php
App::uses('Npl', 'Model');

/**
 * Npl Test Case
 *
 */
class NplTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.npl',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
		'app.earned_sponsorship',
		'app.employee_profile',
		'app.medical_screening',
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
		$this->Npl = ClassRegistry::init('Npl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Npl);

		parent::tearDown();
	}

}
