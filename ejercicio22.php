<?php

$frutas =  array(
    'manzana' => "roja",
    "pera" => "verde",
    "mango" => "amarillo"
);

print_r($frutas);

echo $frutas["manzana"] . "<br>";

foreach ($frutas as $i => $valor) {
    echo $i . "<br>";

    echo $frutas[$i] . "<br>";
}
