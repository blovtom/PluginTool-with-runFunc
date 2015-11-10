<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
	
	public $components = array('DebugKit.Toolbar','Auth','Session');
	
	public function beforeFilter() {
		 $this->Auth->allow();
                 $this->loadModel('Cart');		
		$this->set('count',$this->Cart->getCount());
	}
}
