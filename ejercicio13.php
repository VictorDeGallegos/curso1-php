<?php

if ($_POST) {
    $boton = $_POST['btnValor'];

    switch ($boton) {
        case '1':
            echo 'Botón 1';
            break;
        case '2':
            echo 'Botón 2';
            break;
        case '3':
            echo 'Botón 3';
            break;

        default:
            echo 'Botón no reconocido';
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>
    <h1>Switch</h1>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="btnValor" value="1">
        <br>
        <input type="submit" name="btnValor" value="2">
        <br>
        <input type="submit" name="btnValor" value="3">
    </form>
</body>

</html>