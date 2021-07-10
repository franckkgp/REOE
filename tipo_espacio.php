
<?php
require('vendor/autoload.php');
use Rakit\Validation\Validator;
if ('GET' == $_SERVER['REQUEST_METHOD'] && isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once './conexion.php';
    $sql = 'select id, tipo_espacio from tipo where id = :id';
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $sentencia->execute();
    $tipo_espacio = $sentencia->fetch(PDO::FETCH_ASSOC);
    if (null == $tipo_espacio) {
        require_once './error_no_encontrado.php';
        exit;
    }
    $_POST = array_merge($_POST, $tipo_espacio);
}
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear espacio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<?php
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                <i class="bi bi-building"></i> tipo de  espacio
                </div>
                <div class="card-body">
                    <?php
                    if ('POST' == $_SERVER['REQUEST_METHOD']) {
                        // validamos los datos
                        $validator = new Validator;
                        $validation = $validator->make($_POST, [
                            'espacio' => 'required|min:4|max:50'
                        ]);
                        $validation->setMessages([
                            'required' => ':attribute es requerido'
                            , 'min' => ':attribute longitud mínima no se cumple'
                            , 'max' => ':attribute longitud máxima no se cumple'
                        ]);
                        // then validate
                        $validation->validate();
                        $errors = $validation->errors();
                    }
                    if ('GET' == $_SERVER['REQUEST_METHOD'] || $validation->fails()) {
                    ?>
                    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                        <div class="mb-3">
                            <label for="espacio" class="form-label">Agregar un nuevo tipo de espacio</label>
                            <input type="text" name="espacio" class="form-control form-control-sm<?php echo isset($errors) && $errors->has('espacio') ? ' is-invalid' : 'is-valid' ?>" id="espacio" aria-describedby="espacioHelp" value="<?php echo $_POST['espacio'] ?? '' ?>">
                            <div id="espacioaHelp" class="invalid-feedback"><?php echo isset($errors) && $errors->first('espacio') ?></div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-sm"> <i class="bi bi-plus-lg"></i> Cargar espacio</button>    
                      <a href="tipo_espacio.php" class="btn btn-secondary btn-sm">cancelar</a>
                    </form>
                    <?php
                    } else {
                        // es post y todo está bien
                        require_once './conexion.php';
                        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                            //actualizamos
                            $sql = 'update tipo set tipo_espacio = :espacio where id = :id';
                            $sentencia = $conexion->prepare($sql);
                            $sentencia->bindValue(':espacio', $_POST['espacio'], PDO::PARAM_STR);
                            $sentencia->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
                            $sentencia->execute();
                            echo '<h6>espacio actualizado</h6>';
                            //echo '<div><a href="tipos_espacios.php" class="btn btn-secondary btn-sm">espacios</a></div>';
                        } else {
                            //creamos
                            $sql = 'insert into tipo(tipo_espacio) values (:espacio)';
                            $sentencia = $conexion->prepare($sql);
                            $sentencia->bindValue(':espacio', $_POST['espacio'], PDO::PARAM_STR);
                            $sentencia->execute();
                            echo '<h6>espacio creado</h6>';
                            //echo '<div><a href="espacios.php" class="btn btn-secondary btn-sm">espacio</a></div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<script src="js/validacion_bootstrap.js"></script>
</body>
</html>