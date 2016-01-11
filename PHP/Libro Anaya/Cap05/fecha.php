<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fecha</title>
    </head>
    <body>
        <?php
        date_default_timezone_set("UTC");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio",
            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        echo "Fecha actual: " . date("d-m-Y") . "<br>";
        echo "Día del año: " . date("z") . "<br>";
        echo "Estamos en el mes: " . $meses[date("n")] . "<br>";
        ?>
    </body>
</html>