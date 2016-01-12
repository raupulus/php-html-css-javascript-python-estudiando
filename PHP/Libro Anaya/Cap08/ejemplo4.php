<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("clase_mysqli.php");
        $servidor = "localhost";
        $usuario = "usuario";
        $pass = "password";
        $base_datos = "compras";
        $consulta = "SELECT id FROM usuarios WHERE nombre='Luis Miguel'";
        $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
        $usuario->consulta($consulta);
        $fila = $usuario->extraer_registro();
        $id_usuario = $fila["id"];
        $borrar = "DELETE FROM usuarios WHERE id = '$id_usuario'";
        $usuario->consulta($borrar);
        ?>
    </body>
</html>