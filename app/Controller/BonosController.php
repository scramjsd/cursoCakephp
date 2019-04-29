<?php
App::uses('AppController', 'Controller');
/**
 * Bonos Controller
 *
 * @property Bono $Bono
 * @property PaginatorComponent $Paginator
 */
class BonosController extends AppController {

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
		$this->Bono->recursive = 0;
		$this->set('bonos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bono->exists($id)) {
			throw new NotFoundException(__('Invalid bono'));
		}
		$options = array('conditions' => array('Bono.' . $this->Bono->primaryKey => $id));
		$this->set('bono', $this->Bono->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bono->create();
			if ($this->Bono->save($this->request->data)) {
				$this->Flash->success(__('The bono has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bono could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Bono->Usuario->find('list');
		$atenciones = $this->Bono->Atencione->find('list');
		$pacientes = $this->Bono->Paciente->find('list');
		$profesionales = $this->Bono->Profesionale->find('list');
		$this->set(compact('usuarios', 'atenciones', 'pacientes', 'profesionales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bono->exists($id)) {
			throw new NotFoundException(__('Invalid bono'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bono->save($this->request->data)) {
				$this->Flash->success(__('The bono has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bono could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bono.' . $this->Bono->primaryKey => $id));
			$this->request->data = $this->Bono->find('first', $options);
		}
		$usuarios = $this->Bono->Usuario->find('list');
		$atenciones = $this->Bono->Atencione->find('list');
		$pacientes = $this->Bono->Paciente->find('list');
		$profesionales = $this->Bono->Profesionale->find('list');
		$this->set(compact('usuarios', 'atenciones', 'pacientes', 'profesionales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Bono->exists($id)) {
			throw new NotFoundException(__('Invalid bono'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bono->delete($id)) {
			$this->Flash->success(__('The bono has been deleted.'));
		} else {
			$this->Flash->error(__('The bono could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
