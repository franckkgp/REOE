<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores recibidos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Valore recibidos
                    </div>
                    <div class="card-body">
                        <pre>
                            <?php
                                print_r($_POST);
                            ?>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>