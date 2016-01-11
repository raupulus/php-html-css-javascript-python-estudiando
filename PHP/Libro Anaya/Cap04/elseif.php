<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dia = 4;
        if ($dia == 1) {
            echo "El día es Lunes";
        } else {
            if ($dia == 2) {
                echo "El día es Martes";
            } else {
                if ($dia == 3) {
                    echo "El día es Miércoles";
                } else {
                    if ($dia == 4) {
                        echo "El día es Jueves";
                    }
                }
            }
        }
        ?>        
    </body>
</html>