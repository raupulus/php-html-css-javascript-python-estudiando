<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("configuracion.php");
        try {
            $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $pass);
        } catch (PDOException $e) {
            echo "Imposible conectar con la base de datos";
            exit;
        }
        try {
            $base_datos_PDO->beginTransaction();
            $sql = "update usuarios set cuenta = 0 where id = :id";
            $sentencia = $base_datos_PDO->prepare($sql);
            $sentencia->bindValue(":id", 1);
            $sentencia->execute();
            $sentencia->bindValue(":id", 2);
            $sentencia->execute();
            $sentencia->bindValue(":id", 3);
            $sentencia->execute();
            $base_datos_PDO->commit();
        } catch (PDOException $e) {
            $base_datos_PDO->rollBack();
            echo "Hubo algún error en la transacción " . $e->getMessage();
        }
        ?>
    </body>
</html>