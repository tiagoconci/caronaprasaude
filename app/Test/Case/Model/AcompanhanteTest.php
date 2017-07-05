<?php
App::uses('Acompanhante', 'Model');

/**
 * Acompanhante Test Case
 */
class AcompanhanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acompanhante',
		'app.parada',
		'app.destino',
		'app.agenda',
		'app.paciente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Acompanhante = ClassRegistry::init('Acompanhante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acompanhante);

		parent::tearDown();
	}

}
