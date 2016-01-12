<?php
require_once("configuracion.php");
class servicios {
  public function saludo($nombre) {
    return "HOLA $nombre";
  } 
}
try {
  $servidorSOAP = new SOAPServer(NULL,array('uri' => URI,
                'location' => LOCATION));
  $servidorSOAP->setClass('servicios');
  $servidorSOAP->handle();
}
catch (SOAPFault $f) {  
  print $f->faultstring;
} 
?>