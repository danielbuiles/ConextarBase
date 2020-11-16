<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Targetas</title>
</head>
<body>

<?php

include("BaseDatos.php");

$transaccion=new baseDatos();

$consultaSQL="SELECT * FROM usuaios WHERE 1";

//metodo consultar datos
$transaccion->BuscarDatos($consultaSQL);

$Resultados=$transaccion->BuscarDatos($consultaSQL);
?>

<div class="container">

    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach ($Resultados as $Resultado):?>

            <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($Resultado["Foto"]) ?>" class="card-img-top" alt="Foto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($Resultado["Nombre"]) ?></h5>
                        <p class="card-text"><?php echo($Resultado["Descripcion"]) ?></p>
                        <a href="EliminarUsuarios.php?id=<?php echo($Resultado["idUsuario"])?>" class="btn btn-danger" name="Eliminar" method="Get">Eliminar</a>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>

</div>


    
    <footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </footer>
</body>
</html>