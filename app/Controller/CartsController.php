<?php
App::uses('AppController', 'Controller');

class CartsController extends AppController {

	public $uses = array('Plugintool','Cart');

	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addPlugin($this->request->data['Cart']['plugintool_id']);
		}
		echo $this->Cart->getCount();
                $this->redirect (array('action'=>'view'));
	}
        public function add1() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addPlugin($this->request->data['Cart']['plugintool_id']);
		}
		echo $this->Cart->getCount();
                $this->redirect('/Plugintools');
                echo $this->Cart->getCount();
	}

	public function view() {
		$carts = $this->Cart->readPlugin();
		$plugintools = array();
		// var_dump($carts);
		if (null!=$carts) {
			foreach ($carts as $id => $count) {
				if (!$this->Plugintool->exists($id)) {
					throw new NotFoundException(__('Invalid plugin'));
				}
				$options = array('conditions' => array('Plugintool.' . $this->Plugintool->primaryKey => $id));
				$plugintool = $this->Plugintool->find('first', $options);
				$plugintools[]=$plugintool;
			}
		}
		$this->set('plugintools', $plugintools);
		$this->set('carts', $carts);
	}

	public function update() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$cart = array();
				foreach ($this->request->data['Cart']['count'] as $index=>$count) {
					if ($count>0) {
						$plugintoolId = $this->request->data['Cart']['plugintool_id'][$index];
						$cart[$plugintoolId] = $count;
					}
				}
				$this->Cart->savePlugin($cart);
			}
		}
		$this->redirect(array('action'=>'view'));
	}

	public function check()
    {
        $carts = $this->Cart->readPlugin();
        $plugintools = array();
        
        if (null != $carts) {
            foreach ($carts as $id => $count) {
                if (!$this->Plugintool->exists($id)) {
                    throw new NotFoundException(__('Invalid plugin'));
                }

                $options = array('conditions' => array('Plugintool.' . $this->Plugintool->primaryKey => $id));
                $plugintool = $this->Plugintool->find('first', $options);
                $plugintools[] = $plugintool;
            }
        }

        $functions = array();
        $funcDuplicate = array();
        //hook names
        $hooks = array();
        $hookDuplicate = array();
        //hook callbacks
        $hooksC = array();
        $hookDuplicateC = array();
        
        //class names
        $methods = array();
        $mDuplicate = array();
        //method names
        $methodName = array();
        $mDuplicateMethods = array();
        //tag names
        $filters = array();
        $fDuplicate = array();
        //callback filters
        $filterC= array();
        $fCDuplicate = array();

        foreach ($plugintools as $plugintool) {
            foreach ($plugintool['Functionality'] as $func) {
                $funcArray[] = $func['function_name'];
                if (in_array($func['function_name'], $funcArray) && (!in_array($func['function_name'], $functions))) {
                    $functions[] = $func['function_name'];
                } else {
                    $funcDuplicate[] = $func['function_name'];
                }
            }

            //each iteration of hook model
            foreach ($plugintool['Hook'] as $hook) {
                $hookArray[] = $hook['hook_name'];
                if (in_array($hook['hook_name'], $hookArray) && (!in_array($hook['hook_name'], $hooks))) {
                    $hooks[] = $hook['hook_name'];
                } else {
                    $hookDuplicate[] = $hook['hook_name'];
                }
            }
                        foreach ($plugintool['Hook'] as $hook) {
                $hookArray[] = $hook['hook_callback'];
                if (in_array($hook['hook_callback'], $hookArray) && (!in_array($hook['hook_callback'], $hooksC))) {
                    $hooksC[] = $hook['hook_callback'];
                } else {
                    $hookDuplicateC[] = $hook['hook_callback'];
                }
            }
            foreach ($plugintool['Method'] as $method) {
                $methodArray[] = $method['method_name'];
                if (in_array($method['class_name'], $methodArray) && (!in_array($method['class_name'], $methods))) {
                    $methods[] = $method['class_name'];
                } else {
                    $mDuplicate[] = $method['class_name'];
                }
            }
           foreach ($plugintool['Method'] as $method) {
                $methodArray[] = $method['method_name'];
                if (in_array($method['method_name'], $methodArray) && (!in_array($method['method_name'], $methodName))) {
                    $methodName[] = $method['method_name'];
                } else {
                    $mDuplicateMethods[] = $method['method_name'];
                }
            }

            foreach ($plugintool['Filter'] as $filter) {
                $filterArray[] = $filter['tag_name'];
                if (in_array($filter['tag_name'], $filterArray) && (!in_array($filter['tag_name'], $filters))) {
                    $filters[] = $filter['tag_name'];
                } else {
                    $fDuplicate[] = $filter['tag_name'];
                }
            }
                       foreach ($plugintool['Filter'] as $filter) {
                $filterArray[] = $filter['filter_callback'];
                if (in_array($filter['filter_callback'], $filterArray) && (!in_array($filter['filter_callback'], $filterC))) {
                    $filterC[] = $filter['filter_callback'];
                } else {
                    $fCDuplicate[] = $filter['filter_callback'];
                }
            }
            $funcUnique = array_unique($funcDuplicate);
            $duplicates = $funcUnique;
            $hookUnique = array_unique($hookDuplicate);
            $hDuplicates = $hookUnique;
            $hookCunique= array_unique($hookDuplicateC);
            $hooksDuplicateC = $hookCunique;
            $methodUnique = array_unique($mDuplicate);
            $mDuplicates = $methodUnique;
            $mNameUnique = array_unique($mDuplicateMethods);
            $mDuplicateMethod = $mNameUnique;
            
            $filterUnique = array_unique($fDuplicate);
            $fDuplicates = $filterUnique;
            $filterCunique = array_unique($fCDuplicate);
            $filtersC = $filterCunique;

            $this->set('hooks', $hooks);
            $this->set('duplicates', $duplicates);
            $this->set('mDuplicates', $mDuplicates);
            $this->set('mDuplicateMethod', $mDuplicateMethod);
            $this->set('hDuplicates', $hDuplicates);
            $this->set('hooksDuplicateC', $hooksDuplicateC);

            $this->set('plugintools', $plugintools);
            $this->set('fDuplicates', $fDuplicates);
            $this->set('filtersC', $filtersC);
            $this->set('carts', $carts);
        }
    }

	public function clear() {
            $carts = $this->Cart->readPlugin();
            if (null != $carts)
                {
            $this->Session->destroy();

            }
            $this->redirect(array('action'=>'view'));

        }




}