<?php

$txtNombre = "";
if ($_POST) {
    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) { ?>
        <strong>Hola</strong>: <?php echo $txtNombre; ?>
    <?php } ?>
    <form action="ejercicio31.php" method="post">
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar información">
    </form>
</body>

</html>