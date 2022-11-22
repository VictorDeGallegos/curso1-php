<?php
// Herencia
class Persona
{
    public $nombre; // Atributo
    private $edad; // Atributo privado
    protected $altura; // Atributo protegido

    #constructor
    public function __construct($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }



    public function asignarNombre($nombre) // Método
    {
        $this->nombre = $nombre;
    }

    public function imprimirNombre() // Método
    {
        echo "El nombre es: " . $this->nombre;
    }
    public function mostrarEdad() // Método
    {
        $this->edad = 20;
        return $this->edad;
    }
}


$objAlumno = new Persona("victor"); // Instancia de la clase Persona
// $objAlumno->asignarNombre('victor'); // LLamada al método asignarNombre
$objAlumno->imprimirNombre(); // LLamada imprimirN