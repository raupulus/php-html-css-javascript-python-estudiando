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
        $resultado = $base_datos_PDO->query("Select * from usuarios");
        while ($fila = $resultado->fetch(PDO::FETCH_BOTH)) {
            print_r($fila) . '<br>';
        }
        ?>
    </body>
</html