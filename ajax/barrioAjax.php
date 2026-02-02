<?php
require_once("../logica/barrio.php");

$id_ciudad = $_GET['id_ciudad'];
$barrio = new Barrio();
$barrios = $barrio->consultarPorCiudad($id_ciudad);

foreach ($barrios as $b) {
    echo "<option value='{$b[0]}'>{$b[1]}</option>";
}

?>