<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>in_array</title>
    </head>
    <body>
        <?php
        $colores = array("rojo", "verde", "amarillo", "azul");
        if (in_array("rojo", $colores)) {
            echo "Se ha encontrado el valor rojo";
        } else {
            echo "No se ha encontrado";
        }
        ?>
    </body>
</html>