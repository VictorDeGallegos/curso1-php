<?php

#Formato json encode

$personas = array(
    array(
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 25
    ),
    array(
        "nombre" => "Maria",
        "apellido" => "Gomez",
        "edad" => 30
    ),
    array(
        "nombre" => "Pedro",
        "apellido" => "Gomez",
        "edad" => 28
    )
);

echo json_encode($personas);
