<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("clases2.php");
        $luisMiguel = new PersonaEspaña("Luis Miguel", "Cabezas", "Granado", "04510533A");
        $luisMiguel->setNombre("Luis Miguel");
        $luisMiguel->setApellidos("Cabezas", "Granado");
        if ($luisMiguel::comprobarDni("04510533A")) {
            $luisMiguel->setDni("04510533A");
        }
        ?>
        <h1>
            Datos de <?=
        $luisMiguel->getNombre()
        . " "
        . $luisMiguel->getApellidos();
        ?>
        </h1>
        ID: <?= $luisMiguel->getDni(); ?>

        <?php
        cambiaNombre($luisMiguel, "Pedro");
        echo $luisMiguel->getNombre();
        ?>
    </body>
</html>