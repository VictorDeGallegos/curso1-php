<?php

if ($_POST) {

    # Recibir informacion del formulario HTML (Metodo POST)
    $nombre = $_POST['txtNombre'];
    echo "Hola tu nombre es: " . $nombre;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>