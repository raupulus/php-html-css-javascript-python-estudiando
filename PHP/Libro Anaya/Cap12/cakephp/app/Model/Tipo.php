<?php
App::uses('AppModel', 'Model');

class Tipo extends AppModel {

    public $displayField = 'nombre';

    public $hasMany = array(
        'Producto' => array(
            'className' => 'Producto',
            'foreignKey' => 'tipo_id',
            'dependent' => false,
        )
    );
    
}
