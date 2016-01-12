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
        $sql = "select id, nombre, apellidos from usuarios where id = :id";
        $sentencia = $base_datos_PDO->prepare($sql);
        $sentencia->execute(array("id" => 1));
        while ($fila = $sentencia->fetch(PDO::FETCH_BOTH)) {
            print_r($fila) . '<br>';
        }
        ?>
    </body>
</html>