<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Contacto Array</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="jquery-1.10.2.min.js"></script>
        <script src="jquery.validate.min.js"></script>
        <script src="messages_es.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br/>
        <div class="container">
            <?php $contacto =  $_POST['contacto'];?>
            <div class="col-md-12 well">
                Nuevo Contacto: <?php echo $contacto['nombre'];?>
            </div>
            <div class="col-md-12 well">
                Correo electrónico: <?php echo $contacto['email'];?>
            </div>
            <div class="col-md-12 well">
                Métodos de Pago:
                    <?php
                    $metodosPago = $_POST['metodosPago'];
                    foreach($metodosPago as $metodoPago){
                        echo "[$metodoPago]";
                    }
                    ?>
            </div>
        </div>
    </body>
</html>
