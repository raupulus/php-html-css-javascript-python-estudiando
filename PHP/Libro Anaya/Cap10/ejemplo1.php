<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src = "js/jquery.validate.min.js"></script>
        <script src = "js/messages_es.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Lectura de XML con SimpleXML</title>
    </head>
    <body>
        <?php
        $biblioteca = simplexml_load_file("biblioteca.xml");
        foreach ($biblioteca->tema as $tema) {
            ?>
            <h2><?= $tema["id"] ?></h2>
            <table class="table">
                <tr>
                    <?php
                    foreach ($tema->libro as $libro) {
                        ?>

                        <td>
                            <img src="<?= $libro->imagen ?>" align="left">
                            <b><?= $libro->titulo ?><br></b>
                            <?= $libro->autor ?><br>
                            <?= $libro->editorial ?><br>
                        </td>                      
                        <?php
                    }
                }
                ?>
            </tr>
        </table>
    </body>
</html>