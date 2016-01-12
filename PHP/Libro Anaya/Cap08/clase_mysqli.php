<?php

class Servidor_Base_Datos {

    private $servidor;
    private $usuario;
    private $pass;
    private $base_datos;
    private $descriptor;

    function __construct($servidor, $usuario, $pass, $base_datos) {
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->base_datos = $base_datos;
        $this->conectar_base_datos();
    }

    private function conectar_base_datos() {
        $this->descriptor = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->base_datos);
    }

    public function consulta($consulta) {
        $this->resultado = mysqli_query($this->descriptor, $consulta);
    }

    public function extraer_registro() {
        if ($fila = mysqli_fetch_array($this->resultado, MYSQLI_ASSOC)) {
            return $fila;
        } else {
            return false;
        }
    }

}