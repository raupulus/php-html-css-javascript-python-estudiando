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
        $sentencia->bindValue(":id", 1);
        $sentencia->execute();
        $luis = $sentencia->fetch(PDO::FETCH_BOTH);
        $sentencia->bindValue(":id", 2);
        $sentencia->execute();
        $paco = $sentencia->fetch(PDO::FETCH_BOTH);
        print_r($luis);
        print_r($paco);
        ?>
    </body>
</html>