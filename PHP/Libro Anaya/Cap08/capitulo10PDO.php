<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("configuracion.php");
        $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $pass);
        $resultado = $base_datos_PDO->query('call obtener_usuarios()');
        $filas = $resultado->fetchAll();
        print_r($filas);
        ?>
    </body>
</html>