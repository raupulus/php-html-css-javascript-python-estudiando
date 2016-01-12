<?php
class rutas {
    private $controlador;
    private $id;
    function __construct() {
        $this->controlador = $_GET["controlador"];
        $this->id = $_GET["id"];
    }
    function ver_controlador() {
        return $this->controlador;
    }
    function ver_id() {
        return $this->id;
    }
}