<?php
include 'includes/header.php';

//Constructor property promotion

class Empleado {
    

    public function __construct(

        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {}
}

$empleado = new Empleado('Juan', 'Lopez', 'Risaralda', 'prueba@gmail.com', 123);
$empleado2 = new Empleado('Pepe', 'Lopez', 'Risaralda2', 'prueb2a@gmail.com', 323);



echo"<pre>";
var_dump($empleado);
echo"</pre>";

echo"<pre>";
var_dump($empleado2);
echo"</pre>";