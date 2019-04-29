<?php
App::uses('AppController', 'Controller');
/**
 * Atenciones Controller
 *
 * @property Atencione $Atencione
 * @property PaginatorComponent $Paginator
 */
class AtencionesController extends AppController {

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
		$this->Atencione->recursive = 0;
		$this->set('atenciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Atencione->exists($id)) {
			throw new NotFoundException(__('Invalid atencione'));
		}
		$options = array('conditions' => array('Atencione.' . $this->Atencione->primaryKey => $id));
		$this->set('atencione', $this->Atencione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Atencione->create();
			if ($this->Atencione->save($this->request->data)) {
				$this->Flash->success(__('The atencione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The atencione could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Atencione->Usuario->find('list');
		$pacientes = $this->Atencione->Paciente->find('list');
		$profesionales = $this->Atencione->Profesionale->find('list');
		$this->set(compact('usuarios', 'pacientes', 'profesionales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Atencione->exists($id)) {
			throw new NotFoundException(__('Invalid atencione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Atencione->save($this->request->data)) {
				$this->Flash->success(__('The atencione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The atencione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Atencione.' . $this->Atencione->primaryKey => $id));
			$this->request->data = $this->Atencione->find('first', $options);
		}
		$usuarios = $this->Atencione->Usuario->find('list');
		$pacientes = $this->Atencione->Paciente->find('list');
		$profesionales = $this->Atencione->Profesionale->find('list');
		$this->set(compact('usuarios', 'pacientes', 'profesionales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Atencione->exists($id)) {
			throw new NotFoundException(__('Invalid atencione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Atencione->delete($id)) {
			$this->Flash->success(__('The atencione has been deleted.'));
		} else {
			$this->Flash->error(__('The atencione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
