<?php
App::uses('Parada', 'Model');

/**
 * Parada Test Case
 */
class ParadaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parada',
		'app.destino',
		'app.agenda',
		'app.paciente',
		'app.acompanhante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parada = ClassRegistry::init('Parada');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parada);

		parent::tearDown();
	}

}
