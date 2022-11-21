<?php
include 'includes/header.php';

//Atributo de una clase

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;

$empleado -> nombre = "Jandisjijedj";

echo"<pre>";
var_dump($empleado);
echo"</pre>";

$empleado2 = new Empleado;

$empleado2 -> nombre = "dsds";

echo"<pre>";
var_dump($empleado2);
echo"</pre>";