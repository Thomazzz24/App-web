<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

require_once("../persistencia/conexion.php");

$conexion = new Conexion();
$conexion->abrir();

$resultado = $conexion->ejecutar(
    "SELECT id_barrio, barrio FROM barrio ORDER BY barrio"
);

$datos = [];

while ($row = $resultado->fetch_row()) {
    $datos[] = $row;
}

echo json_encode($datos);
