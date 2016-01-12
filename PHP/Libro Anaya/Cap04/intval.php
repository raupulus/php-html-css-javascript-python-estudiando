<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Conversión de un tipo string a un integer
        $cadena = "232";
        echo "El tipo de la variable cadena es " . gettype($cadena) . "<br>";
        $numero = intval($cadena);
        echo ("el numero es $numero");
        ?>
    </body>
</html>