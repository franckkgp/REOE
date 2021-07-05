<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Inicio de sesión
                    </div>
                    <div class="card-body">
                        <form action="sesion.php" method="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="correo_electronico" class="form-label">Correo electrónico</label>
                                <input type="email" required class="form-control form-control-sm" name="correo_electronico" id="correo_electronico" required>
                                <div class="invalid-feedback">
                                    Ingresa tu correo electrónico
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" required class="form-control form-control-sm" name="contrasena" id="contrasena" required>
                                <div class="invalid-feedback">
                                    Ingresa tu contraseña
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/validacion_bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>