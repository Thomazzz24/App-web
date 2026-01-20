<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-primary d-flex align-items-center justify-content-center" style="min-height:100vh">

<div class="card shadow" style="width:360px">
    <div class="card-body">

        <h4 class="text-center fw-bold mb-3">WEB MASTER</h4>

        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger text-center">
                Usuario o contraseña incorrectos
            </div>
        <?php } ?>

        <form method="POST" action="../autenticacion/autenticacion.php">

            <div class="mb-3">
                <label>Usuario</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-dark w-100">
                Ingresar
            </button>

        </form>
    </div>
</div>

</body>
</html>
