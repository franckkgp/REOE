<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
   
    <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                <i class="bi bi-tools"></i></i> Servicios 
                </div>
                <div class="card-body">
                <form action="servicios.php" method="post" class="needs-validation" novalidate>
                                <div class="mb-3">

                                <label for="servicios" class="form-label">Servicios</label>
                                <input type="text" required class="form-control form-control-sm" name="servicios" id="servicios" required>
                                <div class="invalid-feedback">
                                    Agrega un servicio
                                </div>
                            </div>
                            <div class="container">
                            <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary btn-sm"> <i class="bi bi-plus-lg"></i> Enviar</button>
                    </form>     
                </div>
            </div>
        </div>
    </div>
<script src="js/bootstrap.min.js"></script>
<script src="js/validacion_bootstrap.js"></script>
</body>
</html>