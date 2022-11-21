<?php
include 'includes/header.php';

//Instanciar una clase

class Empleado {
    
}

$empleado = new Empleado;
$empleado1 = new Empleado;
$empleado2 = new Empleado;

echo"<pre>";
var_dump($empleado);
echo"</pre>";

echo"<pre>";
var_dump($empleado1);
echo"</pre>";

echo"<pre>";
var_dump($empleado2);
echo"</pre>";