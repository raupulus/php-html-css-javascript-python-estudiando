<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conexión mediante una clase</title>
    </head>
    <body>
        <?php
        $servidor = "localhost";
        $usuario = "usuario";
        $pass = "password";
        $base_datos = "compras";
        //Primero se añade el fichero que contiene la clase
        require_once("clase_mysqli.php");
        $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
        $usuario->consulta("select * from usuarios");
        while ($fila = $usuario->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                echo "$indice: $valor<br>";
            }
        }
        ?>
    </body>
</html>