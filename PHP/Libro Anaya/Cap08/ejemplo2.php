<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar una fila</title>
    </head>
    <body>
        <?php
        require_once("clase_mysqli.php");
        $servidor = "localhost";
        $usuario = "usuario";
        $pass = "password";
        $base_datos = "compras";
        $insertar = "INSERT INTO usuarios (nombre, apellidos) VALUES ('Cristina', 'Pérez Burgos')";
        $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
        $usuario->consulta($insertar);
        ?>
    </body>
</html>