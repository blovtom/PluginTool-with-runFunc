<?php
App::uses('AppModel', 'Model');
/**
 * Functionality Model
 *
 * @property Plugin $Plugin
 * @property Plugin_id $plugin_id
 */
class Functionality extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'functions';

public $validate = array('function_name' => array('rule' =>'notEmpty') );



    public function beforeFilter() {
        $this->Auth->allow();
    }


    /**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'function_name';
        public $displayField = 'plugin_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
            'Plugin' => array(
                'className' => 'Plugin',
                'foreignKey' =>'id',
                'joinType' => 'INNER'
                 ),
            
            'Plugintool' => array(
                'className'=> 'Plugintool',
                'foreignKey'=>'id'
                
               
            )
            
            
            );
                
            
            
        
        

/**
 * hasMany associations
 *
 * @var array
 */



}
