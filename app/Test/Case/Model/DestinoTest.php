<?php
App::uses('Destino', 'Model');

/**
 * Destino Test Case
 */
class DestinoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.destino',
		'app.parada'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Destino = ClassRegistry::init('Destino');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Destino);

		parent::tearDown();
	}

}
