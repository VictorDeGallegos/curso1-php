<?php
// Herencia
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


class trabajador extends Persona
{
    public $puesto; // Atributo nuevo
    public function presentarTrabajador() // Método nuevo
    {
        echo "Hola soy " . $this->nombre . " y trabajo como " . $this->puesto;
    }
}

$objTrabajador = new Trabajador("victor"); // Instancia de la clase Persona
$objTrabajador->asignarNombre('victor'); // Más información sobre el operador flecha en el siguiente ejemplo
$objTrabajador->puesto = 'programador';
$objTrabajador->presentarTrabajador(); // Método nue
