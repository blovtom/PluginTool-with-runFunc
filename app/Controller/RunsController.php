<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
class RunsController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow();
    }

    
public $uses = array('Plugintool','Cart');



    public function run($id){
                if (!$this->Plugintool->exists($id)) {
            throw new NotFoundException(__('Invalid Plugin'));
        }
    $plugintool = $this->Plugintool->read(null,$id);
             //   $plugintools = $this->Plugintool->find('list');
//                foreach($plugintools as $plugintool){
//                    foreach($plugintool['Functionality'] as $func){
//                        if($plugintool['function_name'] == $selectedPlugin){
//                            
//                        }
//                    }
//                }
                $this->set(compact('plugintool'));
              //  $this->set('plugintools',$plugintools);

            }  
            
            
            
            
}
