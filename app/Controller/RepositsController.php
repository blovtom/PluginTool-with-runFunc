<?php
 ini_set('max_execution_time', 300); 
App::uses('AppController', 'Controller');
 
 
class RepositsController extends AppController {
    public $components = array('Paginator');
    public $uses = array('Plugintool','Reposit','Functionality','Hooks','Filter','Method');





    public function index() {





        $this->Plugintool->recursive=0;
   $plugintools  = $this->Plugintool->find('list');


//        $methodsm=$this->Method->find('list',array('fields'=> 'method_name'));


   $this->set('plugintools',$plugintools);


//
//


}
    public function functionsView(){
        $functionality = $this->Functionality->find('count');
        $this->set('functionality',$functionality);
    }
    public function methodsView(){
        $this->Method->recursive = 0;
        $methodsc=$this->Method->find('list',array('fields'=> 'class_name'));
        $methodsm=$this->Method->find('list',array('fields'=> 'method_name'));
        $this->set('methodsc',$methodsc);
        $this->set('methodsm',$methodsm);
    }

    public function filtersView(){
       // $filters = $this->Filter->find('list', array('fields'=>'tag_name'));
        $filters = tag();
      //  $filtersc = $this->Filter->find('list', array('fields'=>'filter_callback'));
        $this->set('filters',$filters);
       // $this->set('filtersc',$filtersc);

    }

    public function hooksView(){

    }
}             
?>