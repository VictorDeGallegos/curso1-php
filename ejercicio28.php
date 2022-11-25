<?php
//Insertar datos en la tabla fotos
$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contrasenia = "";


try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album2", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
    $conexion->exec($sql);
    echo "Conexión realizada con éxito";
} catch (PDOException $e) {
    echo "Conexión erronea: " . $e->getMessage();
    //throw $th;
}
