<?php
include('cabecera.php');
include('conexion.php');

if ($_POST) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $fecha = new DateTime();

    $imagen = $fecha->getTimestamp() . "_" . $_FILES['imagen']['name'];
    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($imagen_temporal, "img/" . $imagen);
    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `descripcion`, `imagen`) VALUES (NULL, '$nombre', '$descripcion', '$imagen');";
    $objConexion->ejecutar($sql);
    header("Location: portafolio.php");
}
if ($_GET) {

    $id = $_GET['borrar'];
    $objConexion = new conexion();

    $imagen = $objConexion->consultar("SELECT imagen FROM proyectos WHERE id = $id");

    unlink("img/" . $imagen[0]['imagen']);

    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =" . $id;
    $objConexion->ejecutar($sql);
    header("Location: portafolio.php");
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM proyectos");

// print_r($proyectos);
?>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Datos del proyecto</h4>
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="" required><br>
                        Descripción:
                        <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
                        <br>
                        Imagen: <input class="form-control" type="file" name="imagen" id="" <br>
                        <br>
                        <input class="btn btn-success" type="submit" value="Subir proyecto">
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos as $proyecto) { ?>
                            <tr class="">
                                <td><?php echo $proyecto['id'] ?></td>
                                <td><?php echo $proyecto['nombre'] ?></td>
                                <td><?php echo $proyecto['descripcion'] ?></td>
                                <td>
                                    <img width="100" src="img/<?php echo $proyecto['imagen'] ?>" alt="">
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'] ?>">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>






<?php
include('pie.php');
?>