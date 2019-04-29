<?php
App::uses('Atencione', 'Model');

/**
 * Atencione Test Case
 */
class AtencioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.atencione',
		'app.usuario',
		'app.tipo_usuario',
		'app.paciente',
		'app.profesionale',
		'app.cargo',
		'app.bono',
		'app.atencion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Atencione = ClassRegistry::init('Atencione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Atencione);

		parent::tearDown();
	}

}
