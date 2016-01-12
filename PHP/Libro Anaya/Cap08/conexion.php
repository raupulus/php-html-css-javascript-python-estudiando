<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conexión con MySQL</title>
    </head>
    <body>
        <?php
        $servidor = "localhost";
        $usuario = "usuario";
        $pass = "password";
        $base_datos = "compras";
        //Conexión al servidor de bases de datos
        $descriptor = mysqli_connect($servidor, $usuario, $pass, $base_datos) or die("Imposible conectar");
        //Se cierra la conexión cuando terminemos
        mysqli_close($descriptor);
        ?>
    </body>
</html>