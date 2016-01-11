<?php
require_once "Sesion.php";
require_once("Servidor_Base_Datos.php");
class UsuarioBD{
    private $usuarios;
    
    function __construct() {
        $servidor   = "127.0.0.1";
        $usuario    = "root";
        $pass       = "";
        $base_datos = "MiBaseDeDatos";

        $esquema = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
        $esquema->consulta("select * from usuarios");
        $this->usuarios = $esquema->extraer_registros();
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
            if($usuario["username"] == $username && md5($usuario["password"]) == $clave){
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