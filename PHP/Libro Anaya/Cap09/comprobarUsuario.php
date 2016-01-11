<?php 
require_once "Sesion.php";
require_once "Usuario.php";
$sesion = new Sesion();
$usuario = new Usuario();
$usuario->login();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Comprobando el usuario</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="jquery-1.10.2.min.js"></script>
        <script src="jquery.validate.min.js"></script>
        <script src="messages_es.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Acceso permitido</h1>
            <div class="col-md-12 well">
                Nombre: <?php echo $_SESSION["nombre"];?>
            </div>
            <div class="col-md-12 well">
                Apellidos: <?php echo $_SESSION["apellido"];?>
            </div>
            <div class="col-md-12 well">
                Perfil: <?php echo $_SESSION["perfil"];?>
            </div>
            <div class="col-md-12 well">
                Teléfono: <?php echo $_SESSION["telefono"];?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='logout.php'>Salir</a>
                </div>
            </div>
        </div>
    </body>
</html>