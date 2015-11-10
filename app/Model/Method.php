<?php
App::uses('AppModel', 'Model');
/**
 * Method Model
 *
 * @property Plugin $Plugin
 */
class Method extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'method_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Plugin' => array(
			'className' => 'Plugin',
			'foreignKey' => 'plugin_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
            'Plugintool' => array(
                'className'=> 'Plugintool',
                'foreignKey'=>'id'
               
            )
	);
}
