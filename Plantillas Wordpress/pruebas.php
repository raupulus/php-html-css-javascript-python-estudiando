<!DOCTYPE HTML>
<HTML lang="es">
	<HEAD>
		<META charset="utf-8"/>
		<TITLE>Prueba</TITLE>
		<META name="description" content="pruebas"/>
		<META name="keywords" content="prueba"/>
		<META name="author" content="Raúl Caro Pastorino"/>
		<LINK rel="shortcut icon" href="./images/favicon.png"/>
		<LINK rel="stylesheet" href="./CSS/styles.css"/>
		<SCRIPT src="JS/scripts.js"></SCRIPT>
	</HEAD>

	<BODY>
        <?php
            global $numero;
            $numero = 999;
            function calamar () {
                echo "Está funcionando";
                echo "<BR/>";
                echo "El número es: ".$numero;
                echo isset($numero);
            }
            calamar();
        ?>
	</BODY>
</HTML>