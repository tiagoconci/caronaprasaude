<?php
App::uses('AppController', 'Controller');
/**
 * Acompanhantes Controller
 *
 * @property Acompanhante $Acompanhante
 * @property PaginatorComponent $Paginator
 */
class AcompanhantesController extends AppController {

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
		$this->Acompanhante->recursive = 0;
		$this->set('acompanhantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acompanhante->exists($id)) {
			throw new NotFoundException(__('Invalid acompanhante'));
		}
		$options = array('conditions' => array('Acompanhante.' . $this->Acompanhante->primaryKey => $id));
		$this->set('acompanhante', $this->Acompanhante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acompanhante->create();
			if ($this->Acompanhante->save($this->request->data)) {
				$this->Session->setFlash(__('The acompanhante has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acompanhante could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		}
		$paradas = $this->Acompanhante->Parada->find('list');
		$pacientes = $this->Acompanhante->Paciente->find('list');
		$this->set(compact('paradas', 'pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Acompanhante->exists($id)) {
			throw new NotFoundException(__('Invalid acompanhante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acompanhante->save($this->request->data)) {
				$this->Session->setFlash(__('The acompanhante has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acompanhante could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Acompanhante.' . $this->Acompanhante->primaryKey => $id));
			$this->request->data = $this->Acompanhante->find('first', $options);
		}
		$paradas = $this->Acompanhante->Parada->find('list');
		$pacientes = $this->Acompanhante->Paciente->find('list');
		$this->set(compact('paradas', 'pacientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Acompanhante->id = $id;
		if (!$this->Acompanhante->exists()) {
			throw new NotFoundException(__('Invalid acompanhante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Acompanhante->delete()) {
			$this->Session->setFlash(__('The acompanhante has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The acompanhante could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
