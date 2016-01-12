<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comprobación si existe un fichero</title>
    </head>
    <body>
        <?php
        if (!defined('FICHERO')) {
            die('No existe el fichero');
            echo "Esto no se ejecuta";
        }
        ?>
    </body>
</html>
