<?php
App::uses('AppController', 'Controller');
/**
 * Paradas Controller
 *
 * @property Parada $Parada
 * @property PaginatorComponent $Paginator
 */
class ParadasController extends AppController {

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
		$this->Parada->recursive = 0;
		$this->set('paradas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parada->exists($id)) {
			throw new NotFoundException(__('Invalid parada'));
		}
		$options = array('conditions' => array('Parada.' . $this->Parada->primaryKey => $id));
		$this->set('parada', $this->Parada->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parada->create();
			if ($this->Parada->save($this->request->data)) {
				$this->Session->setFlash(__('The parada has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parada could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		}
		$destinos = $this->Parada->Destino->find('list');
		$agendas = $this->Parada->Agenda->find('list');
		$pacientes = $this->Parada->Paciente->find('list');
		$acompanhantes = $this->Parada->Acompanhante->find('list');
		$this->set(compact('destinos', 'agendas', 'pacientes', 'acompanhantes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Parada->exists($id)) {
			throw new NotFoundException(__('Invalid parada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parada->save($this->request->data)) {
				$this->Session->setFlash(__('The parada has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parada could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Parada.' . $this->Parada->primaryKey => $id));
			$this->request->data = $this->Parada->find('first', $options);
		}
		$destinos = $this->Parada->Destino->find('list');
		$agendas = $this->Parada->Agenda->find('list');
		$pacientes = $this->Parada->Paciente->find('list');
		$acompanhantes = $this->Parada->Acompanhante->find('list');
		$this->set(compact('destinos', 'agendas', 'pacientes', 'acompanhantes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Parada->id = $id;
		if (!$this->Parada->exists()) {
			throw new NotFoundException(__('Invalid parada'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Parada->delete()) {
			$this->Session->setFlash(__('The parada has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The parada could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
