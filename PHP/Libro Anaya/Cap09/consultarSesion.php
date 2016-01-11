<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Consultando la sesión</title>
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
            <h1>Consultando los datos de la sesión</h1>
            <div class="col-md-12 well">
                Nombre: <?php echo$_SESSION["nombre"];?>
            </div>
            <div class="col-md-12 well">
                Profesión: <?php echo$_SESSION["profesion"];?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='eliminarSesion.php'>Eliminar sesión</a>
                </div>
            </div>
        </div>
    </body>
</html>