<?php

require_once 'ZendFramework-2.3.0/library/Zend/Loader/StandardAutoloader.php';
require_once("configuracion.php");
require_once("clases.php");
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->register();

try {
    if (isset($_GET['wsdl'])) {
        $autodiscover = new Zend\Soap\AutoDiscover();
        $autodiscover->setClass('Operaciones')
                ->setUri('LOCATION');
        header('Content-type: application/xml');
        echo $autodiscover->generate()->toXml();
    } else {
        $servidorSOAP = new SOAPServer(WSDL);
        $servidorSOAP->setClass('Operaciones');
        $servidorSOAP->handle();
    }
} catch (SOAPFault $f) {
    print $f->faultstring;
}
?>