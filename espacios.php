<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar espacio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                Espacios
            </div>
            <div class="card-body">
                <form action="espacios_guarda.php" method="POST" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3"> 
                                <label for="descripcion" class="form-label">Nombre del espacio</label>
                                <input type="text" name="nombre-del-espacio" required class="form-control form-control-sm" id="nombre-del-espacio" >
                                <div class="invalid-feedback">
                                    Ingresa el nombre del espacio
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" name="descripcion" required class="form-control form-control-sm" id="descripción">
                                <div class="invalid-feedback">
                                    Ingresa la descripción
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="metros" class="form-label">Metros (cuadrados)</label>
                                <input type="text" name="metros" required class="form-control form-control-sm" id="metros">
                                <div class="invalid-feedback">
                                    Ingresa los metros
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="disponible1" class="form-label">Disponible para</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disponible" id="disponible1" required value="renta">
                                    <label class="form-check-label" for="disponible1">
                                        Renta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disponible" id="disponible2" required value="intercambio">
                                    <label class="form-check-label" for="disponible2">
                                        Intercambio
                                    </label>
                                    <div class="invalid-feedback">
                                        Selecciona una opción
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="estado-del-espacio">Estado del espacio</label>
                                <select class="form-select" id="estado-del-espacio" required class="form-control form-control-sm">
                                    <option selected value="">...</option>
                                    <option value="1">Disponible</option>
                                    <option value="2">Prestado</option>
                                </select>
                                <div class="invalid-feedback">
                                    Selecciona el estado del espacio
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="costo" class="form-label">Costo</label>
                                        <input type="text" name="costo" required class="form-control form-control-sm" id="costo">
                                        <div class="invalid-feedback">
                                            Ingresa el costo
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="costo-renta-por-dia" class="form-label">Costo de renta (por día)</label>
                                        <input type="text" name="costo-renta-por-dia" required class="form-control form-control-sm" id="costo-renta-por-dia">
                                        <div class="invalid-feedback">
                                            Ingresa el costo de la renta
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="estado_id">Estado</label>
                                    <select class="form-select" id="estado_id" required class="form-control form-control-sm">
                                        <option selected value="">Estado...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Selecciona un estado
                                    </div>
                                </div> 
                                <div class="mb-3">
                                    <label class="form-label" for="municipio_id">Municipio</label>
                                    <select class="form-select" id="municipio_id" required class="form-control form-control-sm">
                                        <option selected value="">Municipio...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Selecciona un municipio
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="calle" class="form-label">Calle</label>
                                        <input type="text" name="calle" required class="form-control form-control-sm" id="calle">
                                        <div class="invalid-feedback">
                                            Ingresa tu calle
                                        </div>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="colonia" class="form-label">Colonia</label>
                                        <input type="text" name="colonia" required class="form-control form-control-sm" id="colonia">
                                        <div class="invalid-feedback">
                                            Ingresa tu calonia
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
                                         Opcional
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
                        <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
                    </div>
                </form>    
            </div>   
        </div>
    </div>
    <script src="js/validacion_bootstrap.js"></script>  
</body>
</html>