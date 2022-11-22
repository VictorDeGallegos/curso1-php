<?php
// Clase
class Persona
{
    public $nombre; // Atributo
    private $edad; // Atributo privado
    protected $altura; // Atributo protegido


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

$objAlumno = new Persona("Victor"); // Instancia de la clase Persona
$objAlumno->asignarNombre('Maria'); // Más información sobre el operador flecha en el siguiente ejemplo

$objAlumno2 = new Persona("Victor"); // Instancia de la clase Persona
$objAlumno2->asignarNombre("Pedro"); // Más información
$objAlumno2->imprimirNombre(); // Más información

echo $objAlumno2->nombre; // Más información
echo $objAlumno2->mostrarEdad(); // Más información
