<?php
date_default_timezone_set('Europe/Madrid');
require_once("clases.php");
$rutas = new rutas();
$controlador = new controlador();
$controlador->entrar_rutas($rutas);
$controlador->repartidor();