<?php
//Iniciar sesión
session_start();


$_SESSION['usuario'] = "develoteca";
$_SESSION["estatus"] = "activo";

echo "Sesión iniciada" . ":<br>";
echo "Usuario: " . $_SESSION['usuario'] . "<br>";
