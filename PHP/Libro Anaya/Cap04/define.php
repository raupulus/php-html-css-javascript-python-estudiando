<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define("Titulo", "PHP y MySQL");
        if (defined("TITULO")) {
            echo "El título del libro es: " . TITULO;
        }
        ?>
    </body>
</html>
