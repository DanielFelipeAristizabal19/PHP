<?php
include 'includes/header.php';

class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion() {
        echo "Nombre: ". $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }
}

//Herencia

class Empleado extends Persona {
    
    
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento) {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    } 
}

class Proveedor extends Persona{

    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa) {

        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->telefono = $telefono;
        $this->empresa = $empresa;
    }
    
    public function mostrarInformacion() {
        echo "Nombre: ". $this->nombre . " " . $this->apellido . " Email: " . $this->email . " de la 
        empresa: " . $this->empresa;
    }
}

$empleado = new Empleado('Daniel', 'Aristizabal', 'daniel@gmail.com', 3333333, 12345, 'TI');

$proveedor = new Proveedor('Felipe', 'León', 'felipe@gmail.com', 2222222, 'TikTok'); 

echo"<pre>";
var_dump($empleado);
echo"</pre><br>";

echo"<pre>";
var_dump($proveedor);
echo"</pre><br>";

$empleado->mostrarInformacion(); 

echo "<br>";

$proveedor->mostrarInformacion();

echo "<br>";

echo $proveedor->getTelefono();