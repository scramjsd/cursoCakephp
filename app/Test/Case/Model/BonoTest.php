<?php
App::uses('Bono', 'Model');

/**
 * Bono Test Case
 */
class BonoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bono',
		'app.usuario',
		'app.tipo_usuario',
		'app.paciente',
		'app.atencione',
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
		$this->Bono = ClassRegistry::init('Bono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bono);

		parent::tearDown();
	}

}
