<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Creando una sesión con datos</title>
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
            <h1>Creando una sesión con datos</h1>
            <div class="col-md-12 well">
                <?php
                    $_SESSION["nombre"] = "Guillermo González";
                    $_SESSION["profesion"] = "Astronauta";
                ?>
                Datos de sesión creados.
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='consultarSesion.php'>Consultar datos de sesión</a>
                </div>
            </div>
        </div>
    </body>
</html>