<?php
require_once(__DIR__ . "/../persistencia/conexion.php");
require_once(__DIR__ . "/../persistencia/ciudadDAO.php");

class Ciudad {

    public function consultar() {

        $conexion = new Conexion();
        $dao = new CiudadDAO();

        // 🔴 ESTO ES LO QUE TE FALTABA
        $conexion->abrir();

        $conexion->ejecutar($dao->consultar());

        $ciudades = [];
        while (($fila = $conexion->registro()) != null) {
            $ciudades[] = $fila;
        }

        $conexion->cerrar();

        return $ciudades;
    }
}
