<?php

use Producto as GlobalProducto;

 include 'includes/header.php';

//Metodo Encapsulacion 2 piedra angular de POO.

class Producto {
    public $nombre;
    private $precio;
    protected $disponible;


    //Metodo para setear los valores
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function setPrecio(int $precio){
        $this->precio = $precio;
    }
    public function setDisponible(bool $disponible){
        $this->disponible = $disponible;
    }

    public function getDisponible() {
        return $this->disponible;
    }
}

$producto = new Producto('Tablet');

$producto->setPrecio(600);
$producto->setDisponible(true);

echo $producto->getDisponible();

echo '<pre>';
var_dump($producto);
echo '</pre>';

//obtener valor

include 'includes/footer.php';