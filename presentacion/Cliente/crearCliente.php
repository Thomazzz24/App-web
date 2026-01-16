<?php
require_once(__DIR__ . "/../../logica/Cliente.php");

if ($_POST) {
    $cliente = new Cliente(
        0,
        1,
        $_POST['id_plan'],
        $_POST['id_ciudad'],
        $_POST['id_barrio'],
        $_POST['id_tipo_identificacion'],
        $_POST['id_tipo_contribuyente'],
        1,
        $_POST['num_cliente'],
        $_POST['identificacion'],
        $_POST['nombre_1'],
        $_POST['nombre_2'],
        $_POST['apellido_1'],
        $_POST['apellido_2'],
        $_POST['telefono_1'],
        $_POST['telefono_2'],
        $_POST['direccion'],
        $_POST['correo'],
        $_POST['dia_corte'],
        34 // id_usuario (admin)
    );

    if ($cliente->crear()) {
        echo "<div class='alert alert-success'>Cliente creado correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al crear cliente</div>";
    }
}
?>

<form method="post" class="container mt-4">

  <input class="form-control mb-2" name="nombre_1" placeholder="Primer nombre" required>
  <input class="form-control mb-2" name="nombre_2" placeholder="Segundo nombre">
  <input class="form-control mb-2" name="apellido_1" placeholder="Primer apellido" required>
  <input class="form-control mb-2" name="apellido_2" placeholder="Segundo apellido">
  <input class="form-control mb-2" name="identificacion" placeholder="Identificación" required>
  <input class="form-control mb-2" name="telefono_1" placeholder="Teléfono 1" required>
  <input class="form-control mb-2" name="telefono_2" placeholder="Teléfono 2">
  <input class="form-control mb-2" name="correo" placeholder="Correo" required>
  <input class="form-control mb-2" name="direccion" placeholder="Dirección" required>
  <input class="form-control mb-2" name="dia_corte" placeholder="Día de corte" required>
  <input class="form-control mb-2" name="num_cliente" placeholder="Número cliente" required>

  <!-- valores fijos por ahora -->
  <input type="hidden" name="id_plan" value="1">
  <input type="hidden" name="id_ciudad" value="62">
  <input type="hidden" name="id_barrio" value="1">
  <input type="hidden" name="id_tipo_identificacion" value="1">
  <input type="hidden" name="id_tipo_contribuyente" value="1">

  <button class="btn btn-primary mt-3">Crear Cliente</button>
</form>
