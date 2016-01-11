<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("configuracion.php");
        $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos; charset=utf8", $usuario, $pass);
        $resultado = $base_datos_PDO->query("Select * from usuarios");
        foreach ($resultado as $row) {
            echo $row['nombre'] . " " . $row['apellidos'] . '<br>';
        }
        ?>
    </body>
</html>