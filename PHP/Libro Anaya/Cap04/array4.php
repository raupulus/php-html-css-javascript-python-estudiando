<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mi_array = array("cero" => 23, "uno" => 45, 2 => 76);
        echo $mi_array["uno"] . "<br>";
        echo $mi_array[2];
        echo "Número de datos en el array: " . count($mi_array);
        ?>
    </body>
</html>