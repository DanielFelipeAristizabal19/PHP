<?php
include 'includes/header.php';

//Modificadores de acceso

//Métodos estáticos

class Empleado {

    //public, acceso desde cualquier lugar
    //protected, acceso unicamente desde dentro la clase
    //private


    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo) {
        self::$nombre = $nombre; //El this hace referencia a los atributos internos de la clase
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

    public static function obtenerEmpleado() {
        echo "Desde método estático";
    }

    public static function getNombre() {
        return self::$nombre;
    }
}

//Empleado::obtenerEmpleado();

$empleado = new Empleado('Miguel', 'Hernandez', 'Risaralda', 'prueba@gmail.com', 123);

echo $empleado::getNombre();


echo"<pre>";
var_dump($empleado);
echo"</pre><br>";