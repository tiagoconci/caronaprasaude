<?php
App::uses('AppController', 'Controller');
/**
 * Destinos Controller
 *
 * @property Destino $Destino
 * @property PaginatorComponent $Paginator
 */
class DestinosController extends AppController {

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
		$this->Destino->recursive = 0;
		$this->set('destinos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Destino->exists($id)) {
			throw new NotFoundException(__('Invalid destino'));
		}
		$options = array('conditions' => array('Destino.' . $this->Destino->primaryKey => $id));
		$this->set('destino', $this->Destino->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Destino->create();
			if ($this->Destino->save($this->request->data)) {
				$this->Session->setFlash(__('The destino has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destino could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
		if (!$this->Destino->exists($id)) {
			throw new NotFoundException(__('Invalid destino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Destino->save($this->request->data)) {
				$this->Session->setFlash(__('The destino has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destino could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Destino.' . $this->Destino->primaryKey => $id));
			$this->request->data = $this->Destino->find('first', $options);
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
		$this->Destino->id = $id;
		if (!$this->Destino->exists()) {
			throw new NotFoundException(__('Invalid destino'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Destino->delete()) {
			$this->Session->setFlash(__('The destino has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The destino could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
