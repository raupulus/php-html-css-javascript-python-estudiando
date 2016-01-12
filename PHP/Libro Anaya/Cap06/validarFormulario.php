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
        SANEAMIENTO
    </div>
    <div class="col-md-12 well">
        <?php echo filter_var($_POST["nombre"],  FILTER_SANITIZE_STRING);?>
    </div>
    <div class="col-md-12 well">
        <?php  echo filter_var($_POST["edad"], FILTER_SANITIZE_NUMBER_INT);?>
    </div>
    <div class="col-md-12 well">
        <?php echo filter_var($_POST["web"], FILTER_SANITIZE_URL);?>
    </div>
    <div class="col-md-12 well">
        <?php echo filter_var($_POST["email"],  FILTER_SANITIZE_EMAIL);?>
    </div>
    <div class="col-md-12 well">
        VALIDACIÓN
    </div>
    <div class="col-md-12 well">
        <?php 
            if(!isset($_POST["nombre"])){
                echo "ERROR: El campo nombre es obligatorio.";
            }
        ?>
    </div>
    <div class="col-md-12 well">
        <?php  
            if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT)){
                echo "ERROR: El campo edad debe ser un número entero.";
            }
        ?>
    </div>
    <div class="col-md-12 well">
        <?php 
            if(!filter_var($_POST["web"], FILTER_VALIDATE_URL)){
                echo "ERROR: El campo web no es correcto.";
            }
        ?>
    </div>
    <div class="col-md-12 well">
        <?php 
            if(!filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL)){
                echo "ERROR: El campo email no es correcto.";
            }
        ?>
    </div>
</div>
    </body>
</html>