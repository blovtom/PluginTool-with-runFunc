<?php
App::uses('AppController', 'Controller');

class HomepageController extends AppController {

    public $components = array('Paginator');

    public function beforeFilter() {
        $this->Auth->allow();
    }

    public function index() {
        $this->Paginator->settings['contain'] = array('Plugin');
        $this->set('Homepage', $this->Paginator->paginate());
    }

}