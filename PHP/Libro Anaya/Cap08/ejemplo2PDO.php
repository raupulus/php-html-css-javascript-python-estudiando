<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try {
        require_once("configuracion.php");   
        $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos; charset=utf8", $usuario, $pass);
        } catch (PDOException $e) {
            echo "Hubo algún error al intentar la conexión con MySQL";
            print_r($e);
        }
        ?>
    </body>
</html>
