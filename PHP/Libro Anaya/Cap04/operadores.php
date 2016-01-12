<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = 23; // Asignación de los valores
        $b = 75;
        if ($a >= $b) { //La condición no se cumple. El resultado es false
            echo "Esta parte no se ejecuta";
        } else {
            echo "La comparación es false porque $a es menor que $b";
        }
        ?>
    </body>
</html>