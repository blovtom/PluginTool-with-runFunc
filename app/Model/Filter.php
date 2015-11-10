<?php
App::uses('AppModel', 'Model');
/**
 * Filter Model
 *
 * @property Plugin $Plugin
 */
class Filter extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tag_name';

public function tag() {
   $this->Filter->query("SELECT COUNT(DISTINCT `tag_name`) FROM `filters`");

}

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
