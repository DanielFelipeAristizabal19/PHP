<?php
include 'includes/header.php';

//Constructores

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
        $this->nombre = $nombre; //El this hace referencia a los atributos internos de la clase
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}

$empleado = new Empleado('Juan', 'Lopez', 'Risaralda', 'prueba@gmail.com', 123);
$empleado2 = new Empleado('Pepe', 'Lopez', 'Risaralda2', 'prueb2a@gmail.com', 323);



echo"<pre>";
var_dump($empleado);
echo"</pre>";

echo"<pre>";
var_dump($empleado2);
echo"</pre>";