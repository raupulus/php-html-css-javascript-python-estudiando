<?php

interface Humano {

    public function setNombre($nombre);

    public function getNombre();

    public function setApellidos($apellido1, $apellido2);

    public function getApellidos();
}

class Persona {

    public $nombre;
    public $apellido1;
    public $apellido2;

    public function __construct($nombre, $apellido1, $apellido2) {
        $this->setNombre($nombre);
        $this->setApellidos($apellido1, $apellido2);        
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setApellidos($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    function getApellidos() {
        return $this->apellido1 . " " . $this->apellido2;
    }

}

class PersonaUSA extends Persona {

    public $id;

    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function getApellidos() {
        return $this->apellido2 . " " . $this->apellido1;
    }

}

class PersonaEspaña extends Persona {

    public $dni;

    public function __construct($nombre, $apellido1, $apellido2, $dni) {
        $this->setDni($dni);
        Persona::__construct($nombre, $apellido1, $apellido2);
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function getDni() {
        return $this->dni;
    }

    public static function comprobarDni($dni) {
        $letras = explode(",", "T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E");
        if (strlen($dni) < 9) {
            $dni = "0" . $dni;
        }
        $numero = intval($dni);
        $letra = strtoupper(substr($dni, -1));
        if (strlen($dni) == 9 && $letra == $letras[$numero % 23]) {
            return true;
        } else {
            return false;
        }
    }

}

function cambiaNombre($objeto, $nombre) {
    $objeto->setNombre($nombre);
}

?>