<?php
App::uses('AppModel', 'Model');
/**
 * Plugintool Model
 *
 * @property Plugins $Plugins
 */
class Run extends AppModel {
public $useTable = false; 

public $validate = array(
    'name' => array(
        'rule' => 'notEmpty'
    ),
);
 

/**
 * Display field
 *
 * @var string
 */
 public function beforeFilter() {
        $this->Auth->allow();
    }
	


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'Functionality'=> array(
                    'className'=> 'Functionality'
                ), 
                'Hook'=>array(
                    'className'=>'Hook'
                ),
                'Method' => array(
                    'className'=> 'Method'
                ),
                'Filter' => array(
                    'className' => 'Filter'
                )


        );

     
}