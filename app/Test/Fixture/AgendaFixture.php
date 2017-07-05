<?php
/**
 * Agenda Fixture
 */
class AgendaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora' => array('type' => 'time', 'null' => false, 'default' => null),
		'capacidade' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'data' => '2017-06-29',
			'hora' => '05:33:25',
			'capacidade' => 1
		),
	);

}
