<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de clases</title>
    </head>
    <body>
        <?php
        require_once("clases.php");
        $luisMiguel = new Persona();
        $luisMiguel->setNombre("Luis Miguel");
        $luisMiguel->setApellidos("Cabezas Granado");
        $luisMiguel->setDni("04510533A");
        ?>
        <h1>
            Datos de <?=
            $luisMiguel->getNombre() . " "
            . $luisMiguel->getApellidos();
            ?>
        </h1>
        DNI: <?= $luisMiguel->getDni(); ?>
    </body>
</html>