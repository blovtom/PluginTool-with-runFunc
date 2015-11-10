<?php
App::uses('AppModel', 'Model');
/**
 * Plugin Model
 *
 */
class Plugin extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

    public $hasMany = array(
        'Plugin' => array(
            'className' => 'Plugin',
            'foreignKey' => 'id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
