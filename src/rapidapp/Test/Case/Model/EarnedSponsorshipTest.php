<?php
App::uses('EarnedSponsorship', 'Model');

/**
 * EarnedSponsorship Test Case
 *
 */
class EarnedSponsorshipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.earned_sponsorship',
		'app.employee',
		'app.appointment',
		'app.appraisal',
		'app.attended_course',
		'app.ayis_before_appointment',
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
		$this->EarnedSponsorship = ClassRegistry::init('EarnedSponsorship');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EarnedSponsorship);

		parent::tearDown();
	}

}
