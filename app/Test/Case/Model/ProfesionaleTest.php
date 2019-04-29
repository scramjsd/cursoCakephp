<?php
App::uses('Profesionale', 'Model');

/**
 * Profesionale Test Case
 */
class ProfesionaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profesionale',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Profesionale = ClassRegistry::init('Profesionale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesionale);

		parent::tearDown();
	}

}
