<?php
include('cabecera.php');
include('conexion.php');

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM proyectos");
?>

<div class="row align-items-md-stretch">
    <div class="col-md-12">
        <div class="h-100 p-5  bg-light">
            <h1 class="display-3">Bienvenid@s</h1>
            <p>Este es un portafolio privado</p>
            <hr class="my-2">
            <p>Para editar el contenido debes iniciar sesión</p>
        </div>
    </div>

</div>

<?php foreach ($proyectos as $proyecto) { ?>
    <!-- Motrar contenido -->
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5  bg-light">
                <h1 class="display-3"><?php echo $proyecto['nombre'] ?></h1>
                <p><?php echo $proyecto['descripcion'] ?></p>
                <hr class="my-2">

            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5  bg-light">
                <img width="300" src="img/<?php echo $proyecto['imagen'] ?>" alt="">
            </div>
        </div>

    </div>



<?php } ?>

<?php include('pie.php'); ?>