<?php
header('Content-Type: application/json');
require_once(__DIR__ . "/../logica/cliente.php");

$idCliente   = $_POST["idCliente"] ?? null;
$estadoNuevo = $_POST["estado"] ?? null;

if (!$idCliente || !$estadoNuevo) {
    echo json_encode(["ok" => false]);
    exit;
}

$cliente = new Cliente($idCliente);
$cliente->cambiarEstado($estadoNuevo);

$iconoEstado = ($estadoNuevo == 1)
    ? "<i class='fa-solid fa-check text-success fs-4'></i>"
    : "<i class='fa-solid fa-x text-danger fs-4'></i>";

$botonAccion = ($estadoNuevo == 1)
    ? "<a href='#' class='cambiarEstado' data-id='$idCliente' data-estado='2' title='Deshabilitar'>
            <i class='fa-regular fa-circle-xmark text-danger fs-3'></i>
       </a>"
    : "<a href='#' class='cambiarEstado' data-id='$idCliente' data-estado='1' title='Habilitar'>
            <i class='fa-regular fa-circle-check text-success fs-3'></i>
       </a>";

echo json_encode([
    "ok" => true,
    "iconoEstado" => $iconoEstado,
    "botonAccion" => $botonAccion
]);
