<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    #Sumar 2 valores

    $suma = $valorA + $valorB;
    echo "<br>" . "La suma de los valores es: $suma";


    #Restar 2 valores
    $resta = $valorA - $valorB;
    echo "<br>" . "La resta de los valores es: $resta";

    #Modular
    $mod = $valorA % $valorB;
    echo "<br>" . "El modulo de los valores es: $mod";

    #Multiplicar
    $multi = $valorA * $valorB;
    echo "<br>" . "La multiplicacion de los valores es: $multi";

    #Dividir
    $div = $valorA / $valorB;
    echo "<br>" . "La division de los valores es: $div";

    #Potencia
    $potencia = $valorA ** $valorB;
    echo "<br>" . "La potencia de los valores es: $potencia";
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
    <h1>Formulario</h1>
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>