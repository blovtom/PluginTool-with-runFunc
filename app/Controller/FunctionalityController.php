<?php
App::uses('AppController', 'Controller');
/**
 * Functionalities Controller
 *
 * @property Functionality $Functionality
 * @property PaginatorComponent $Paginator
 */
class FunctionalityController extends AppController {
    public function beforeFilter() {
        $this->Auth->allow();
    }

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Functionality->recursive = 0;
		$this->set('functionality', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Functionality->exists($id)) {
			throw new NotFoundException(__('Invalid functionality'));
		}
		$options = array('conditions' => array('Functionality.' . $this->Functionality->primaryKey => $id));
		$this->set('functionality', $this->Functionality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Functionality->create();
			if ($this->Functionality->save($this->request->data)) {
				return $this->flash(__('The functionality has been saved.'), array('action' => 'index'));
			}
		}
		$plugins = $this->Functionality->Plugin->find('list');
		$this->set(compact('plugins'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Functionality->exists($id)) {
			throw new NotFoundException(__('Invalid functionality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Functionality->save($this->request->data)) {
				return $this->flash(__('The functionality has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Functionality.' . $this->Functionality->primaryKey => $id));
			$this->request->data = $this->Functionality->find('first', $options);
		}
		$plugins = $this->Functionality->Plugin->find('list');
		$this->set(compact('plugins'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Functionality->id = $id;
		if (!$this->Functionality->exists()) {
			throw new NotFoundException(__('Invalid functionality'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Functionality->delete()) {
			return $this->flash(__('The functionality has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The functionality could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
