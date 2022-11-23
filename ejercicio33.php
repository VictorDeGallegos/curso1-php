<?php

#Formato json decode

$jsonContenido = '[
    {
        "nombre": "Juan",
        "apellido": "Perez",
        "edad": 25
    },
    {
        "nombre": "Maria",
        "apellido": "Gomez",
        "edad": 30
    },
    {
        "nombre": "Pedro",
        "apellido": "Gomez",
        "edad": 28
    }
    ]';

$resultado = json_decode($jsonContenido, true);
print_r($resultado);
echo "<br>";
foreach ($resultado as $key => $value) {
    echo $value['nombre'] . " " . $value['apellido'] . " " . $value['edad'] . "<br>";
}
