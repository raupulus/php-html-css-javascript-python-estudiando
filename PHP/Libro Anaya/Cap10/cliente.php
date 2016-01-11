<?php
require_once("configuracion.php");
try {
    $cliente = new SoapClient(null, array(
        'uri' => URI,
        'location' => LOCATION
    ));
    echo $cliente->saludo("Luis Miguel");
} catch (SOAPFault $f) {
    print $f->faultstring;
}
?>