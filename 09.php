<?php
include 'includes/header.php';

//Gettters y Setters

class Empleado {

    //public, acceso desde cualquier lugar
    //protected, acceso unicamente desde dentro la clase
    //private


    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo) {
        $this->nombre = $nombre; //El this hace referencia a los atributos internos de la clase
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
   
    }

    /* Get - Para obtener un valor
       Set - Para modificar un valor
    */

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

$empleado = new Empleado('Juan', 'Lopez', 'Risaralda', 'prueba@gmail.com', 123);

$empleado->setNombre('Un nuevo nombre');

$empleado->setCodigo(4444);

$empleado->setApellido('Aristizabal');

$empleado->setEmail('programador@gmail.com');

echo $empleado->getCodigo();
echo $empleado->getNombre();
echo $empleado->getApellido();
echo $empleado->getEmail();