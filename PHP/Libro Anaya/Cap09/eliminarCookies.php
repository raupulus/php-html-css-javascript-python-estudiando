<?php setcookie("color_fondo","");?>
<?php setcookie("color_texto","");?>
<?php setcookie("columnas","");?>
<?php setcookie("filas","");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eliminando Cookies</title>
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
            <h1>Eliminando Cookies</h1>
            <div class="col-md-12 well">
                <div class="span12">Eliminada cookie 'color_fondo'</div>
                <div class="span12">Eliminada cookie 'color_texto'</div>
                <div class="span12">Eliminada cookie 'columnas'</div>
                <div class="span12">Eliminada cookie 'filas'</div>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='consultarCookies.php'>Consultar cookies</a>
                </div>
                <div class="span12">
                    <a href='crearCookies.php'>Crear cookies</a>
                </div>
            </div>
        </div>
    </body>
</html>