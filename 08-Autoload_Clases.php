<?php include 'includes/header.php';

//Namespace es para poder evitar el choque entre clses que se llamen de igual forma

function mi_autoload($clase){
    $partes = explode('\\', $clase);
    require 'clases/' . $partes[1] . '.php';
}

spl_autoload_register('mi_autoload');// Autoload con esto evitas los require por cada archivo

class Cliente {
    public function __construct()
    {
        echo 'Papa es Sullivan';
    }
}

$detalles = new APP\Detalles();
$cliente = new APP\Cliente();
$cliente2 = new Cliente();



include 'includes/footer.php';