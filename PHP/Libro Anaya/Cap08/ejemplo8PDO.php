<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("configuracion.php");
        $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $pass);
        $sql = "delete from usuarios where id > :id";
        $sentencia = $base_datos_PDO->prepare($sql);
        $sentencia->bindValue(":id", 3);
        $sentencia->execute();
        echo "Número de filas borradas: " . $sentencia->rowCount();
        ?>
    </body>
</html>