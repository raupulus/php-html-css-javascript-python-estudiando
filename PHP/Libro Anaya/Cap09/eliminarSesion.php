<?php 
session_start(); // Accedemos a la sesión
$_SESSION = array(); // Nos aseguramos de eliminar los datos de la sesión
session_regenerate_id(TRUE); // Forzamos a regenerar la cookie de sesión 
session_destroy(); // Eliminamos la sesión
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eliminando una sesión</title>
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
            <h1>Eliminando una sesión</h1>
            <div class="col-md-12 well">
                <?php echo "Ya no existe la sesión.";?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='crearSesion.php'>Crear sesión</a>
                </div>
                <div class="span12">
                    <a href='crearSesionConDatos.php'>Crear sesión con datos</a>
                </div>
            </div>
        </div>
    </body>
</html>