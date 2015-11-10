<?php
App::uses('AppController', 'Controller');
/**
 * Filters Controller
 *
 * @property Filter $Filter
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 */
class FiltersController extends AppController {
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
		$this->Filter->recursive = 0;
		$this->set('filters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Filter->exists($id)) {
			throw new NotFoundException(__('Invalid filter'));
		}
		$options = array('conditions' => array('Filter.' . $this->Filter->primaryKey => $id));
		$this->set('filter', $this->Filter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Filter->create();
			if ($this->Filter->save($this->request->data)) {
				return $this->flash(__('The filter has been saved.'), array('action' => 'index'));
			}
		}
		$plugins = $this->Filter->Plugin->find('list');
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
		if (!$this->Filter->exists($id)) {
			throw new NotFoundException(__('Invalid filter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Filter->save($this->request->data)) {
				return $this->flash(__('The filter has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Filter.' . $this->Filter->primaryKey => $id));
			$this->request->data = $this->Filter->find('first', $options);
		}
		$plugins = $this->Filter->Plugin->find('list');
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
		$this->Filter->id = $id;
		if (!$this->Filter->exists()) {
			throw new NotFoundException(__('Invalid filter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Filter->delete()) {
			return $this->flash(__('The filter has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The filter could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
