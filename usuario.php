<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                Usuario
            </div>
            <div class="card-body">
                <form action="valores_recibidos.php" method="POST" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" required class="form-control form-control-sm" id="nombre">
                                <div class="invalid-feedback">
                                    Ingresa tu nombre
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="primer_apellido" class="form-label">Primer Apellido</label>
                                <input type="text" name="primer_apellido" required class="form-control form-control-sm" id="primer_apellido">
                                <div class="invalid-feedback">
                                    Ingresa tu primer apellido
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
                                <input type="text" name="segundo_apellido" required class="form-control form-control-sm" id="segundo_apellido">
                                <div class="invalid-feedback">
                                    Ingresa tu segundo apellido
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="sexo1" class="form-label">Sexo</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo1" required value="Femenino">
                                    <label class="form-check-label" for="sexo1">
                                        Femenino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo2" required value="Masculino">
                                    <label class="form-check-label" for="sexo2">
                                        Masculino
                                    </label>
                                    <div class="invalid-feedback">
                                        Selecciona tu sexo
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" required class="form-control form-control-sm" id="fecha_nacimiento">
                                <div class="invalid-feedback">
                                    Ingresa tu fecha de nacimiento
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="numero_celular" class="form-label">Número de celular</label>
                                        <input type="tel" name="numero_celular" required class="form-control form-control-sm" id="numero_celular">
                                        <div class="invalid-feedback">
                                            Escribe tu número de celular
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="correo_electronico" class="form-label">Correo electrónico</label>
                                        <input type="email" name="correo_electronico" required class="form-control form-control-sm" id="correo_electronico">
                                        <div class="invalid-feedback">
                                            Escribe tu correo electrónico
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" name="contrasena" required class="form-control form-control-sm" id="contrasena">
                                        <div class="invalid-feedback">
                                            Escribe una contraseña
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="contrasena_confirma" class="form-label">Contraseña (confirma)</label>
                                        <input type="password" name="contrasena_confirma" required class="form-control form-control-sm" id="contrasena_confirma">
                                        <div class="invalid-feedback">
                                            Confirma tu contraseña
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="perfil1" class="form-label">Perfil</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perfil" id="perfil1" required value="Administrador">
                                            <label class="form-check-label" for="perfil1">
                                                Administrador
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perfil" id="perfil2" required value="Cliente">
                                            <label class="form-check-label" for="perfil2">
                                                Cliente
                                            </label>
                                            <div class="invalid-feedback">
                                                Selecciona tu perfil
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="estatus1" class="form-label">Estatus</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estatus" id="estatus1" required value="Activo">
                                            <label class="form-check-label" for="estatus1">
                                                Activo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estatus" id="estatus2" required value="Inactivo">
                                            <label class="form-check-label" for="estatus2">
                                                Inactivo
                                            </label>
                                            <div class="invalid-feedback">
                                                Selecciona tu estatus
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="identificacion" class="form-label">Identificación (.jpg)</label>
                                <input type="file" name="identificacion" required class="form-control form-control-sm" id="identificacion" accept=".jpg">
                                <div class="invalid-feedback">
                                    Selecciona una imagen .jpg de tu identificación
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="comprobante_domicilio" class="form-label">Comprobante de domicilio (.jpg)</label>
                                <input type="file" name="comprobante_domicilio" required class="form-control form-control-sm" id="comprobante_domicilio" accept=".jpg">
                                <div class="invalid-feedback">
                                    Selecciona una imagen .jpg de tu comrpobante de domicilio
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="calle" class="form-label">Calle</label>
                                        <input type="text" name="calle" required class="form-control form-control-sm" id="calle">
                                        <div class="invalid-feedback">
                                            Escribe tu calle
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="calle" class="form-label">Colonia</label>
                                        <input type="text" name="calle" required class="form-control form-control-sm" id="calle">
                                        <div class="invalid-feedback">
                                            Escribe tu colonia
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="numero_exterior" class="form-label">Número exterior</label>
                                        <input type="text" name="numero_exterior" required class="form-control form-control-sm" id="numero_exterior">
                                        <div class="invalid-feedback">
                                            Escribe tu número exterior
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="numero_interior" class="form-label">Numero interior</label>
                                        <input type="text" name="numero_interior" class="form-control form-control-sm" id="numero_interior" aria-describedby="numero_interiorHelp">
                                        <div id="numero_interiorHelp" class="form-text">Opcional</div>
                                        <div class="valid-feedback">
                                            Ok, es opcional
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="codigo_postal" class="form-label">Cóigo postal</label>
                                        <input type="text" name="codigo_postal" required class="form-control form-control-sm" id="codigo_postal">
                                        <div class="invalid-feedback">
                                            Escribe tu código postal
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="estado_id" class="form-label">Estado</label>
                                        <select name="estado_id" id="estado_id" required class="form-select form-select-sm">
                                            <option selected value="">Selecciona</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selecciona un estado
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="municipio" class="form-label">Municipio</label>
                                        <select name="municipio_id" id="municipio_id" required class="form-select form-select-sm">
                                            <option selected value="">Selecciona</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selecciona un municipio
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/validacion_bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>