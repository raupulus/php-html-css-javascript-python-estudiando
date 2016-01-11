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
        $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
        $consulta = "select count(*) as numero_filas from usuarios";
        $usuario->consulta($consulta);
        $fila = $usuario->extraer_registro();
        $numero_filas = $fila["numero_filas"];
        $consulta = "select * from usuarios";
        $usuario->consulta($consulta);
        echo "El número de filas es: $numero_filas<br>";
        while ($fila = $usuario->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                echo "$indice: $valor<br>";
            }
        }
        ?>
    </body>
</html>