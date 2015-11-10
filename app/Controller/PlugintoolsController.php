<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
class PlugintoolsController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow();
    }

    public $components = array('Paginator');



    public function index()
            {            
           $conditions = array();
       //Transform POST into GET
       if(($this-> request->is ('post')|| $this->request ->is('put'))&& isset($this->data['Plugintool'])){
           $filter_url['controller'] = $this->request->params['controller'];
           $filter_url['action'] = $this->request->params['action'];

           
           //for each filter we will add a Get parameter for the generated url
           foreach($this->data['Plugintool'] as $name => $value){ //for the data where variable name is the key of the plugin, value is the number
               if($value){ //if variable value is not empty
                   
                   $filter_url[$name]= urlencode($value);//this parses value to the url in $name
                           
               }
           }
           //url has been generated, now to redirect to page
           return    $this->redirect($filter_url);
           
       }
       
       else{
           //inspect all the named parameters to apply the filters
           foreach($this->params['named']as $param_name => $value){
               //Don't apply the default named parameters used for pagination
              
               if(!in_array($param_name, array('page', 'sort','direction','limit'))){
                    //You may use a switch here to make special filters
                   if($param_name == "search"){
                       $conditions['OR'] = //array(
                           array('name LIKE' => '%' . $value . '%');
                         //  array('Movie.description LIKE' => '%' . $value . '%')
                       //);
                   }else{
                       $conditions [$param_name] = $value;
                   }
                   $this->request->data['Plugintool'][$param_name]=$value;
               }
               
           }
       }

       $this->Plugintool->recursive=0;
       $this->paginate = array(
           'limit' => 8,
           'conditions' => $conditions
       );
       $this -> set('plugintools', $this->Paginator->paginate());
       
       //get the possible values for the filters and pass them to the view
       $names = $this->Plugintool->find('list');
       //$directors =$this->Movie->Director->find('list');
       $this->set(compact('names'));
       
       //pass the search parameter to highlight the text
       $this->set('search', isset($this->params['named']['search']) ? $this->params['named']['search']: "");
    }

    public function view($id){

        if (!$this->Plugintool->exists($id)) {
            throw new NotFoundException(__('Invalid Plugin'));
        }

        $plugintool = $this->Plugintool->read(null,$id);
        $this->set(compact('plugintool'));
    }
    public function run($id){   
                
                $plugin = $this->Plugintool->read(null,$id);
                $selectedPlugins = $plugin;
                $plugintool= $this->Plugintool->Functionality->find('all',array('limit'=>20,'recursive' => 0,'where'=>array('Plugintool.id'=>'Functionality.plugin_id')));
                
                //$functionList = array();
                 
                
                $val = array();
                
                foreach($plugintool as  $value){
             $functionList[] = $value['Functionality']['function_name']; 
                 $val[] = $value['Functionality']['plugin_id'];
                    
                 
                 
                }
              $functions =  $this->array_combine_($val,$functionList);
             
                
                
           
         
                 
               
         
        $this->set('functions', $functions);
       
        $this->set('selectedPlugins', $selectedPlugins);                  
        $this -> set('plugintool', $plugintool);
        $this->set('functionList',$functionList);
       
          }  
     public function runPlugin(){
         $this->Plugintool->recursive=0;
     }
       
       public function array_combine_($keys, $values){
           $result = array();
           foreach ($keys as $i => $k) {
        $result[$k][] = $values[$i];
    }
    array_walk($result, create_function('&$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
    return    $result;
       }
}