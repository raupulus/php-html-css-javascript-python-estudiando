<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia");
        foreach ($ciudades as $indice => $valor) {
            echo ("$indice:: El valor es $valor<br />");
        }
        ?>
    </body>
</html>