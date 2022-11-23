<?php
// Cargar una foto
if ($_POST) {
    print_r($_POST); // Muestra el array $_POST
    echo "<br>";
    print_r($_FILES); // Muestra el array $_FILES
    echo "<br>";
    print_r($_FILES['archivo']); // Muestra el array $_FILES['archivo']
    echo "<br>";
    print_r($_FILES['archivo']['name']); // Muestra el nombre del archivo
    echo "<br>";
    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']); // Mueve el archivo a la carpeta del servidor

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">

        Imagen: <br>
        <input type="file" name="archivo" id="">
        <br>
        <br>

        <input type="submit" name="enviar" value="Enviar información">
    </form>
</body>

</html>