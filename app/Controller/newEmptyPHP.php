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
      // $this->set('plugintools', $this->Paginator->paginate());       
    
       $conditions = array();
       //Transform POST into GET
       if(($this-> request->is ('post')|| $this->request ->is('put'))&& isset($this->data['Filter'])){
           $filter_url['controller'] = $this->request->params['controller'];
           $filter_url['action'] = $this->request->params['action'];
           //we need to overwrite the page every time we change the parameters
          //$filter_url['view'] = 1;
           
           //for each filter we will add a Get parameter for the generated url
           foreach($this->data['Filter'] as $name => $value){
               if($value){
                   
                   $filter_url[$name]= urlencode($value);
                           
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
                   $this->request->data['Filter'][$param_name]=$value;
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
       }
