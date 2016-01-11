<?php
class Sesion{
    function __construct() {
        session_start();
    }
    
    public function getVariable($variable){
        if(isset($_SESSION[$variable])){
            return $_SESSION[$variable];
        }
        return null;
    }
    
    public function setVariable($variable, $valor){
        if(isset($_SESSION[$variable])){
            $_SESSION[$variable] = $valor;
        }
    }
    
    public function terminarSesion(){
        session_start();
        $_SESSION = array();
        session_regenerate_id(TRUE); 
        session_destroy();
    }
}
?>