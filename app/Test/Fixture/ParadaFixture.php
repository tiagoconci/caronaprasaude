<?php
/**
 * Parada Fixture
 */
class ParadaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'hora_cheagada' => array('type' => 'time', 'null' => false, 'default' => null),
		'hora_saida' => array('type' => 'time', 'null' => false, 'default' => null),
		'destino_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'agenda_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'paciente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'acompanhante' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'acompanhante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'ausente' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'idx_paradas__acompanhante_id' => array('column' => 'acompanhante_id', 'unique' => 0),
			'idx_paradas__agenda_id' => array('column' => 'agenda_id', 'unique' => 0),
			'idx_paradas__destino_id' => array('column' => 'destino_id', 'unique' => 0),
			'idx_paradas__paciente_id' => array('column' => 'paciente_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'hora_cheagada' => '05:34:16',
			'hora_saida' => '05:34:16',
			'destino_id' => 1,
			'agenda_id' => 1,
			'paciente_id' => 1,
			'acompanhante' => 1,
			'acompanhante_id' => 1,
			'ausente' => 1
		),
	);

}
