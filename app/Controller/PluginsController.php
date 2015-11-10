<?php
App::uses('AppController', 'Controller');
/**
 * Plugins Controller
 *
 * @property Plugin $Plugin
 * @property PaginatorComponent $Paginator

 */
class PluginsController extends AppController {
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
		$this->Plugin->recursive = 0;
		$this->set('plugins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plugin->exists($id)) {
			throw new NotFoundException(__('Invalid plugin'));
		}
		$options = array('conditions' => array('Plugin.' . $this->Plugin->primaryKey => $id));
		$this->set('plugin', $this->Plugin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plugin->create();
			if ($this->Plugin->save($this->request->data)) {
				return $this->flash(__('The plugin has been saved.'), array('action' => 'index'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Plugin->exists($id)) {
			throw new NotFoundException(__('Invalid plugin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plugin->save($this->request->data)) {
				return $this->flash(__('The plugin has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Plugin.' . $this->Plugin->primaryKey => $id));
			$this->request->data = $this->Plugin->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Plugin->id = $id;
		if (!$this->Plugin->exists()) {
			throw new NotFoundException(__('Invalid plugin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Plugin->delete()) {
			return $this->flash(__('The plugin has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The plugin could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
