<?php
App::uses('AppController', 'Controller');
/**
 * Profesionales Controller
 *
 * @property Profesionale $Profesionale
 * @property PaginatorComponent $Paginator
 */
class ProfesionalesController extends AppController {

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
		$this->Profesionale->recursive = 0;
		$this->set('profesionales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesionale->exists($id)) {
			throw new NotFoundException(__('Invalid profesionale'));
		}
		$options = array('conditions' => array('Profesionale.' . $this->Profesionale->primaryKey => $id));
		$this->set('profesionale', $this->Profesionale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesionale->create();
			if ($this->Profesionale->save($this->request->data)) {
				$this->Flash->success(__('The profesionale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The profesionale could not be saved. Please, try again.'));
			}
		}
		$cargos = $this->Profesionale->Cargo->find('list');
		$this->set(compact('cargos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profesionale->exists($id)) {
			throw new NotFoundException(__('Invalid profesionale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesionale->save($this->request->data)) {
				$this->Flash->success(__('The profesionale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The profesionale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesionale.' . $this->Profesionale->primaryKey => $id));
			$this->request->data = $this->Profesionale->find('first', $options);
		}
		$cargos = $this->Profesionale->Cargo->find('list');
		$this->set(compact('cargos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Profesionale->exists($id)) {
			throw new NotFoundException(__('Invalid profesionale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Profesionale->delete($id)) {
			$this->Flash->success(__('The profesionale has been deleted.'));
		} else {
			$this->Flash->error(__('The profesionale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
