<?php
class Servidor_Base_Datos {
    private $servidor;
    private $usuario;
    private $pass;
    private $base_datos;
    private $mysqli;
    private $resultado;
    
    function __construct($servidor, $usuario, $pass, $base_datos) {
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->base_datos = $base_datos;
        $this->conectar_base_datos();
    }
    
    private function conectar_base_datos() {
        $this->mysqli = new mysqli($this->servidor, $this->usuario, $this->pass, $this->base_datos);
    }
    
    public function consulta($consulta) {
        $this->resultado = $this->mysqli->query($consulta);   
    }
      
    public function extraer_registro() {
        if ($fila = $this->resultado->fetch_array(MYSQLI_ASSOC)) {
            return $fila;
        } else {
            return false;
        }
    }
    
    public function extraer_registros() {
        $registros = array();
        while ($fila = $this->resultado->fetch_array(MYSQLI_ASSOC)) {
            $registros[] = $fila;
        }
        return $registros;
    }
}
?>