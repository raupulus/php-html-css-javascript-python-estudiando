<?php
require_once "Sesion.php";

class Usuario{
    private $usuarios;
    
    function __construct() {
        $this->usuarios = array(
            array(
               "username" => "guillermo",
               "password" => "guille2014",
               "nombre"   => "Guillermo",
               "apellido" => "González",
               "perfil"   => "Administrador",
               "telefono"   => 999999999
            ),
            array(
               "username" => "alejandro",
               "password" => "alejandro08",
               "nombre"   => "Alejandro",
               "apellido" => "Cabezas",
               "perfil"   => "Usuario",
               "telefono"   => 888888888
            ),
        );
    }
    
    public function existeUsuario($username){
        foreach($this->usuarios as $usuario){
            if($usuario["username"] == $username){
                return true;
            }
        }
        return false;
    }
    
    public function comprobarClave($username,$clave){
        foreach($this->usuarios as $usuario){
            if($usuario["username"] == $username && $usuario["password"] == $clave){
                return true;
            }
        }
        return false;
    }
    
    private function getUsuario($username){
        foreach($this->usuarios as $usuario){
            if($usuario["username"] == $username){
                return $usuario;
            }
        }
        return array();
    }
    
    public function login(){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            if($this->existeUsuario($username) == true && $this->comprobarClave($username, $password) == true){                    
                $_SESSION = $this->getUsuario($username);
            }else{
                header("Location:login.html");
            }
        }else{
            header("Location:login.html");
        }
    }
    
    public function logout(){
        $sesion = new Sesion();
        $sesion->terminarSesion();
        header("Location:login.html");
    }   
}
?>