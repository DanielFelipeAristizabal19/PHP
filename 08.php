<?php
include 'includes/header.php';

//Modificadores de acceso

class Empleado {

    //public, acceso desde cualquier lugar
    //protected, acceso unicamente desde dentro la clase
    //private


    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo) {
        $this->nombre = $nombre; //El this hace referencia a los atributos internos de la clase
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
   
    }

    public function obtenerNombre() {
        return $this->nombre;
    }

    public function cambiarNombre($nombre) {
        $this->nombre = $nombre;
        
    }
}

$empleado = new Empleado('Juan', 'Lopez', 'Risaralda', 'prueba@gmail.com', 123);
//$empleado->nombreEmpleado();

$empleado->cambiarNombre('Se cambió el nombre');

echo $empleado->obtenerNombre();



echo"<pre>";
var_dump($empleado);
echo"</pre><br>";