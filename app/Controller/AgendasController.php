<?php
App::uses('AppController', 'Controller');
/**
 * Agendas Controller
 *
 * @property Agenda $Agenda
 * @property PaginatorComponent $Paginator
 */
class AgendasController extends AppController {

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
		$this->Agenda->recursive = 0;
		$this->set('agendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agenda->exists($id)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
		$this->set('agenda', $this->Agenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agenda->create();
			if ($this->Agenda->save($this->request->data)) {
				$this->Session->setFlash(__('The agenda has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agenda could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		}
		$destinos = $this->Agenda->Destino->find('list');
		$this->set(compact('destinos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agenda->exists($id)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agenda->save($this->request->data)) {
				$this->Session->setFlash(__('The agenda has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agenda could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
			$this->request->data = $this->Agenda->find('first', $options);
		}
		$destinos = $this->Agenda->Destino->find('list');
		$this->set(compact('destinos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agenda->id = $id;
		if (!$this->Agenda->exists()) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agenda->delete()) {
			$this->Session->setFlash(__('The agenda has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The agenda could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
