<?php
App::uses('AppController', 'Controller');
/**
 * Hooks Controller
 *
 * @property Hook $Hook
 * @property PaginatorComponent $Paginator
 */
class HooksController extends AppController {
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
		$this->Hook->recursive = 0;
		$this->set('hooks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hook->exists($id)) {
			throw new NotFoundException(__('Invalid hook'));
		}
		$options = array('conditions' => array('Hook.' . $this->Hook->primaryKey => $id));
		$this->set('hook', $this->Hook->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hook->create();
			if ($this->Hook->save($this->request->data)) {
				return $this->flash(__('The hook has been saved.'), array('action' => 'index'));
			}
		}
		$plugins = $this->Hook->Plugin->find('list');
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
		if (!$this->Hook->exists($id)) {
			throw new NotFoundException(__('Invalid hook'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hook->save($this->request->data)) {
				return $this->flash(__('The hook has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Hook.' . $this->Hook->primaryKey => $id));
			$this->request->data = $this->Hook->find('first', $options);
		}
		$plugins = $this->Hook->Plugin->find('list');
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
		$this->Hook->id = $id;
		if (!$this->Hook->exists()) {
			throw new NotFoundException(__('Invalid hook'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hook->delete()) {
			return $this->flash(__('The hook has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The hook could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
