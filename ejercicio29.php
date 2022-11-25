<?php
//Leer datos de la tabla fotos
$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contrasenia = "";


try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album2", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    // print_r($resultado);

    foreach ($resultado as $foto) {
        // print_r($foto);
        echo $foto["nombre"] . "<br>";
    }


    echo "Conexión realizada con éxito";
} catch (PDOException $e) {
    echo "Conexión erronea: " . $e->getMessage();
    //throw $th;
}
