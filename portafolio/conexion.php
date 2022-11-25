<?php

class conexion
{
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=album", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Falla de conexión: " . $e->getMessage();
        }
    }

    public function ejecutar($sql) // INSERTA/ACTUALIZAR/ELIMINAR
    {
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql) // CONSULTA
    {
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
