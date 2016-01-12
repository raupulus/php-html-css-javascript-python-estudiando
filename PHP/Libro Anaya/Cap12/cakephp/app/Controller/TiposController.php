<?php
App::uses('AppController', 'Controller');

class TiposController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->Paginator->settings = array('limit' => 10);
        $this->set('tipos', $this->Paginator->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Tipo->create();
            if ($this->Tipo->save($this->request->data)) {
                $this->Session->setFlash("Se ha creado un nuevo tipo");
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("No ha sido posible crear un nuevo tipo");
            }
        }
    }

    public function edit($id = null) {
        if (!$this->Tipo->exists($id)) {
            $this->Session->setFlash('ERROR: No existe el tipo que intenta editar.');
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tipo->save($this->request->data)) {
                $this->Session->setFlash('Se ha actualizado el tipo');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se ha podido actualizar ese tipo');
            }
        } else {
            $options = array('conditions' => array('Tipo.id' => $id));
            $this->request->data = $this->Tipo->find('first', $options);
        }
    }

    public function delete($id = null) {
        $this->Tipo->id = $id;
        if (!$this->Tipo->exists()) {
            $this->Session->setFlash('No existe el tipo a eliminar.');
        }
        if ($this->Tipo->delete()) {
            $this->Session->setFlash('Tipo eliminado.');
        } else {
            $this->Session->setFlash('No se ha podido eliminar ese tipo.');
        }
        return $this->redirect(array('action' => 'index'));
    }
        
}
