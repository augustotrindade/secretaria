<?php
class Conferente extends AppModel {
	var $name = 'Conferente';
	var $displayField = 'id';
	var $validate = array(
		'membro_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'entrada_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tesoureiro' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Membro' => array(
			'className' => 'Membro',
			'foreignKey' => 'membro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entrada' => array(
			'className' => 'Entrada',
			'foreignKey' => 'entrada_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
