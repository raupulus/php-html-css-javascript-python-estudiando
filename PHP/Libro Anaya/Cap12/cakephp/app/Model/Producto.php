<?php
App::uses('AppModel', 'Model');

class Producto extends AppModel {

    public $displayField = 'nombre';

    public $belongsTo = array(
        'Tipo' => array(
            'className' => 'Tipo',
            'foreignKey' => 'tipo_id',
        )
    );
}
