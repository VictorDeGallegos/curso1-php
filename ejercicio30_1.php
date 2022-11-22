<?php
session_start();
//Estatus de la sesión
if (isset($_SESSION['usuario'])) {

    echo "Usuario: " . $_SESSION['usuario'] . "<br>";
    echo "Estatus: " . $_SESSION['estatus'] . "<br>";
} else {
    echo "No hay sesión iniciada";
}
