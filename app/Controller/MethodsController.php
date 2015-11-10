<?php
App::uses('AppController', 'Controller');
/**
 * Methods Controller
 *
 * @property Method $Method
 * @property PaginatorComponent $Paginator
 */
class MethodsController extends AppController {
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
		$this->Method->recursive = 0;
		$this->set('methods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Method->exists($id)) {
			throw new NotFoundException(__('Invalid method'));
		}
		$options = array('conditions' => array('Method.' . $this->Method->primaryKey => $id));
		$this->set('method', $this->Method->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Method->create();
			if ($this->Method->save($this->request->data)) {
				return $this->flash(__('The method has been saved.'), array('action' => 'index'));
			}
		}
		$plugins = $this->Method->Plugin->find('list');
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
		if (!$this->Method->exists($id)) {
			throw new NotFoundException(__('Invalid method'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Method->save($this->request->data)) {
				return $this->flash(__('The method has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Method.' . $this->Method->primaryKey => $id));
			$this->request->data = $this->Method->find('first', $options);
		}
		$plugins = $this->Method->Plugin->find('list');
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
		$this->Method->id = $id;
		if (!$this->Method->exists()) {
			throw new NotFoundException(__('Invalid method'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Method->delete()) {
			return $this->flash(__('The method has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The method could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * method_index method
 *
 * @return void
 */
	public function method_index() {
		$this->Method->recursive = 0;
		$this->set('methods', $this->Paginator->paginate());
	}

/**
 * method_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function method_view($id = null) {
		if (!$this->Method->exists($id)) {
			throw new NotFoundException(__('Invalid method'));
		}
		$options = array('conditions' => array('Method.' . $this->Method->primaryKey => $id));
		$this->set('method', $this->Method->find('first', $options));
	}

/**
 * method_add method
 *
 * @return void
 */
	public function method_add() {
		if ($this->request->is('post')) {
			$this->Method->create();
			if ($this->Method->save($this->request->data)) {
				return $this->flash(__('The method has been saved.'), array('action' => 'index'));
			}
		}
		$plugins = $this->Method->Plugin->find('list');
		$this->set(compact('plugins'));
	}

/**
 * method_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function method_edit($id = null) {
		if (!$this->Method->exists($id)) {
			throw new NotFoundException(__('Invalid method'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Method->save($this->request->data)) {
				return $this->flash(__('The method has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Method.' . $this->Method->primaryKey => $id));
			$this->request->data = $this->Method->find('first', $options);
		}
		$plugins = $this->Method->Plugin->find('list');
		$this->set(compact('plugins'));
	}

/**
 * method_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function method_delete($id = null) {
		$this->Method->id = $id;
		if (!$this->Method->exists()) {
			throw new NotFoundException(__('Invalid method'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Method->delete()) {
			return $this->flash(__('The method has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The method could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
