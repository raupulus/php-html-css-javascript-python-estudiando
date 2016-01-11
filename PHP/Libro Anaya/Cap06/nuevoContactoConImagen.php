<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Contacto con Imagen</title>
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
    <div class="col-md-12 well">
        Nuevo Contacto: <?php echo $_POST['nombre'];?>
    </div>
    <div class="col-md-12 well">
        Correo electrónico: <?php echo $_POST['email'];?>
    </div>
    <div class="col-md-12 well">
        Fichero recibido: 
        <div class="col-md-12">Nombre:   <?php echo $_FILES["foto"]["name"];?></div>
        <div class="col-md-12">Tamaño:   <?php echo $_FILES["foto"]["size"];?> bytes</div>
        <div class="col-md-12">Temporal: <?php echo $_FILES["foto"]["tmp_name"];?></div>
        <div class="col-md-12">Tipo:     <?php echo $_FILES["foto"]["type"];?></div>
        <div class="col-md-12">Error:    <?php echo $_FILES["foto"]["error"];?></div>
        <div class="col-md-12">
            <?php
            if ($_FILES['file']['error'] === UPLOAD_ERR_INI_SIZE) {
                ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
                echo "XXXX";
            }
                if($_FILES["foto"]["type"] != "image/jpeg"){
                    echo "ERROR: El archivo debe ser una imagen de tipo JPEG";
                }else if($_FILES["foto"]["size"] > 512000){
                    echo "ERROR: El archivo no debe exceder los 500KB";
                }else{
                    echo "Fichero Correcto!";
                }
            ?>
        </div>
    </div>
</div>
    </body>
</html>