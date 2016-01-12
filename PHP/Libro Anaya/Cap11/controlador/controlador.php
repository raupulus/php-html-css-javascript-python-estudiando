<?php

class controlador {

    private $rutas;

    function __construct() {
        
    }

    function entrar_rutas($rutas) {
        $this->rutas = $rutas;
    }

    function repartidor() {
        if (method_exists($this, $this->rutas->ver_controlador())) {
            $ruta = $this->rutas->ver_controlador();
            $this->$ruta();
        } else {
            $this->defecto();
        }
    }

    function recetas() {
        if ($this->rutas->ver_id() == 0) {
            $pagina = file_get_contents("vista/defecto.php");
            $this->render_pagina($pagina, "Recetas");
        } else {
            $pagina = file_get_contents("vista/receta.php");
            $this->render_pagina($pagina, "Recetas - " . $this->obtener_titulo_receta($this->rutas->ver_id()));
        }
    }

    function creadores() {
        $pagina = file_get_contents("vista/creadores.php");
        $this->render_pagina($pagina, "Creadores");
    }

    function nueva_receta() {
        $pagina = file_get_contents("vista/nueva.php");
        $this->render_pagina($pagina, "Nueva Receta");
    }

    private function render_pagina($pagina, $titulo) {
        global $ruta_base;
        $pagina = preg_replace("/\#HEAD\#/ms", file_get_contents("vista/head.php"), $pagina);
        $pagina = preg_replace("/\#MENU\#/ms", file_get_contents("vista/menu.php"), $pagina);
        $pagina = $this->activar_menu($pagina);
        $pagina = preg_replace("/\#RUTA_BASE\#/ms", $ruta_base, $pagina);
        $pagina = preg_replace("/\#CAPA_CREADORES\#/ms", file_get_contents("vista/capa_creadores.php"), $pagina);
        $pagina = preg_replace("/\#CAPA_NUEVA_RECETA\#/ms", file_get_contents("vista/capa_nueva_receta.php"), $pagina);
        $pagina = preg_replace("/\#CAPA_RECETA\#/ms", file_get_contents("vista/capa_receta.php"), $pagina);
        $pagina = preg_replace("/\#CAPA_RECETAS\#/ms", file_get_contents("vista/capa_recetas.php"), $pagina);
        $pagina = preg_replace("/\#CARRUSEL\#/ms", file_get_contents("vista/carrusel.php"), $pagina);
        $pagina = preg_replace("/\#RECETAS\#/ms", $this->obtener_recetas(1), $pagina);
        $pagina = preg_replace("/\#RECETAS2\#/ms", $this->obtener_recetas(2), $pagina);
        $pagina = preg_replace("/\#RECETA\#/ms", $this->obtener_receta($this->rutas->ver_id()), $pagina);
        $pagina = preg_replace("/\#TITULO_RECETA\#/ms", $this->obtener_titulo_receta($this->rutas->ver_id()), $pagina);
        $pagina = preg_replace("/\#TITULO\#/ms", $titulo, $pagina);
        $pagina = preg_replace("/\#IMAGEN\#/ms", $this->obtener_imagen($this->rutas->ver_id()), $pagina);
        $pagina = preg_replace("/\#PIE\#/ms", file_get_contents("vista/pie.php"), $pagina);
        echo $pagina;
    }

    private function obtener_imagen($id) {
        global $ruta_base;
        $types = ["image/jpeg" => "jpg", "image/png" => "png", "image/gif" => "gif"];
        $imagen = "";
        foreach ($types as $clave => $valor) {
            if (file_exists("vista/fotos/$id.$valor")) {
                $imagen = "<img src='$ruta_base/vista/fotos/$id.$valor' class='img-thumbnail'>";
            }
        }
        return $imagen;
    }

    private function grabar_receta() {
        global $ruta_base;
        $receta = $this->grabar_receta_modelo();
        $types = ["image/jpeg" => "jpg", "image/png" => "png", "image/gif" => "gif"];
        if ($receta > 0 && array_key_exists($_FILES["fichero"]["type"], $types)) {
            copy($_FILES["fichero"]["tmp_name"], "vista/fotos/" . $receta . "." . $types[$_FILES["fichero"]["type"]]);
        }
        header('Location: ' . $ruta_base . "/" . $receta);
    }

    private function grabar_receta_modelo() {
        $receta = new receta_modelo();
        return $receta->grabar_receta($_POST);
    }

    private function obtener_recetas($pagina) {
        global $ruta_base;
        $receta = new receta_modelo();
        $recetas = $receta->obtener_recetas($pagina);
        $resultado = "";
        foreach ($recetas as $r) {
            $resultado = $resultado . "<h4><a href='$ruta_base/$r[0]'>$r[1]</a></h4><p>$r[2]</p>";
        }
        return $resultado;
    }

    private function obtener_titulo_receta($id) {
        $receta = new receta_modelo();
        $titulo_receta = $receta->obtener_titulo_receta($id);
        return $titulo_receta;
    }

    private function obtener_receta($id) {
        $receta = new receta_modelo();
        $datos_receta = $receta->obtener_receta($id);
        $receta = "$datos_receta[2]";
        $receta .= "<h4>Ingredientes:</h4>";
        $receta .= "$datos_receta[3]";
        $receta .= "<h4>Elaboración:</h4>";
        $receta .= "$datos_receta[4]";
        return $receta;
    }

    private function activar_menu($pagina) {
        switch ($this->rutas->ver_controlador()) {
            case "recetas":
                $pagina = preg_replace("/\#OPCION1\#/ms", "class='active'", $pagina);
                $pagina = preg_replace("/\#OPCION2\#/ms", "", $pagina);
                $pagina = preg_replace("/\#OPCION3\#/ms", "", $pagina);
                break;
            case "creadores":
                $pagina = preg_replace("/\#OPCION1\#/ms", "", $pagina);
                $pagina = preg_replace("/\#OPCION2\#/ms", "class='active'", $pagina);
                $pagina = preg_replace("/\#OPCION3\#/ms", "", $pagina);

                break;
            case "nueva_receta":
                $pagina = preg_replace("/\#OPCION1\#/ms", "", $pagina);
                $pagina = preg_replace("/\#OPCION2\#/ms", "", $pagina);
                $pagina = preg_replace("/\#OPCION3\#/ms", "class='active'", $pagina);
                break;
        }
        return $pagina;
    }
}