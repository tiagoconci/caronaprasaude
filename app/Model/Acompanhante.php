<?php
App::uses('AppModel', 'Model');
/**
 * Acompanhante Model
 *
 * @property Parada $Parada
 * @property Paciente $Paciente
 */
class Acompanhante extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'paciente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Parada' => array(
			'className' => 'Parada',
			'foreignKey' => 'parada_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
