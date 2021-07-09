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
                <form action="espacios_guarda.php" method="POST">
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
                                <label for="metros" class="form-label">Metros</label>
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
                                <label class="form-label" for="estado">Estado</label>
                                <select class="form-select" id="estado" required class="form-control form-control-sm">
                                    <option selected>...</option>
                                    <option value="1">Disponible</option>
                                    <option value="2">Prestado</option>
                                </select>
                                <div class="invalid-feedback">
                                    Selecciona el estado
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
                    </div>
                </form>    
            </div>   
        </div>
    </div>
    

    
</body>
</html>