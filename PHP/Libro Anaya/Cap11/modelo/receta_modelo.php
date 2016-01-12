<?php

class receta_modelo {

    private $base_datos_PDO;

    function __construct() {
        $this->conectar();
    }

    function conectar() {
        global $servidor;
        global $base_datos;
        global $usuario;
        global $pass;
        try {
            $this->base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function numero_recetas() {
        $sql = "SELECT count(*) FROM recetas";
        $sentencia = $this->base_datos_PDO->prepare($sql);
        $sentencia->execute();
        $fila = $sentencia->fetch();
        return $fila[0];
    }

    function obtener_recetas($pagina) {
        $numero_filas = $this->numero_recetas();
        $registros_por_pagina = 3;
        $numero_paginas = intval($numero_filas / $registros_por_pagina);
        $offset = ($pagina - 1) * $registros_por_pagina;
        if (($pagina - 1) <= $numero_paginas) {
            $sql = "SELECT * FROM recetas order by fecha DESC LIMIT :offset, :registro_por_pagina";
            $sentencia = $this->base_datos_PDO->prepare($sql);
            $sentencia->bindValue(":offset", $offset, PDO::PARAM_INT);
            $sentencia->bindValue(":registro_por_pagina", $registros_por_pagina, PDO::PARAM_INT);
            $sentencia->execute();
            return $sentencia->fetchAll();
        } else {
            echo intval($numero_paginas);
        }
    }

    function obtener_titulo_receta($id) {
        $sql = "SELECT * FROM recetas where id = :id";
        $sentencia = $this->base_datos_PDO->prepare($sql);
        $sentencia->bindValue(":id", $id, PDO::PARAM_INT);
        $sentencia->execute();
        $fila = $sentencia->fetch();
        return $fila[1];
    }

    function obtener_receta($id) {
        $sql = "SELECT * FROM recetas where id = :id";
        $sentencia = $this->base_datos_PDO->prepare($sql);
        $sentencia->bindValue(":id", $id, PDO::PARAM_INT);
        $sentencia->execute();
        $fila = $sentencia->fetch();       
        return $fila;
    }
    
    function grabar_receta($valores) {
        $sql = "INSERT INTO recetas(titulo,descripcion,ingredientes,elaboracion,fecha) values(:titulo,:descripcion,:ingredientes,:elaboracion,:fecha)";
        $sentencia = $this->base_datos_PDO->prepare($sql);
        $sentencia->bindValue(":titulo", $valores["titulo"], PDO::PARAM_STR);
        $sentencia->bindValue(":descripcion", $valores["descripcion"], PDO::PARAM_STR);
        $sentencia->bindValue(":ingredientes", $valores["ingredientes"], PDO::PARAM_STR);
        $sentencia->bindValue(":elaboracion", $valores["elaboracion"], PDO::PARAM_STR);
        $sentencia->bindValue(":fecha", date("Y-m-d"), PDO::PARAM_STR);
        $sentencia->execute();
        return $this->base_datos_PDO->lastInsertId();
    }
}