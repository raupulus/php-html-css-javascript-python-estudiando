<?php
  //Variable que contendrá el tipo de método de envio
  $pParametros = FALSE;

  //Tomando el valor de la variable según el método de envio (esto determina si es mediante GET o POST)
  if (count($_GET) != 0){
    $pParametros = $_GET;
  }elseif (count($_POST) != 0) {
    $pParametros = $_POST;
  }

  //Pasando los parámetros a la página web
  if ($pParametros == FALSE) {
    echo('No se ha pasado valor alguno');
    exit();
  }

  echo('<TABLE border="0" width="80%" align="center">');
  echo('<TR bgcolor="red">');
  echo('<TH>Nombre</TH><TH>Valor</TH>');
  echo('</TR>');

  foreach($pParametros as $nombre => $value) {
    echo('<TR>');
    printf(
      '<TD bgcolor="orange">%s</TD><TD bgcolor="yellow">%s</TD>',
      $nombre,$value);
    echo('</TR>');
  }

  echo('</TABLE>');
?>
