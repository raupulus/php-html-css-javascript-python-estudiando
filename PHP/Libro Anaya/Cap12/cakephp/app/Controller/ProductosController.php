<?php
App::uses('AppController', 'Controller');

class ProductosController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->Paginator->settings = array('limit' => 10);
        $this->set('productos', $this->Paginator->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Producto->create();
            if ($this->Producto->save($this->request->data)) {
                $this->Session->setFlash("Se ha creado un nuevo producto");
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("No ha sido posible crear un nuevo producto");
            }
        }
        $this->set('tipos',$this->Producto->Tipo->find('list'));
    }

    public function edit($id = null) {
        if (!$this->Producto->exists($id)) {
            $this->Session->setFlash('ERROR: No existe el producto que intenta editar.');
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Producto->save($this->request->data)) {
                $this->Session->setFlash('Se ha actualizado el producto');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se ha podido actualizar ese tipo');
            }
        } else {
            $this->request->data = $this->Producto->find('first', array('conditions' => array('Producto.id' => $id)));
        }
        $this->set('tipos',$this->Producto->Tipo->find('list'));
    }

    public function delete($id = null) {
        $this->Producto->id = $id;
        if (!$this->Producto->exists()) {
            $this->Session->setFlash('No existe el producto a eliminar.');
        }
        if ($this->Producto->delete()) {
            $this->Session->setFlash('Producto eliminado');
        } else {
            $this->Session->setFlash('No se ha podido eliminar ese tipo.');
        }
        return $this->redirect(array('action' => 'index'));
    }
        
}
