<?php include 'includes/header.php';

//Definiendo una clase

class Producto {
    public $nombre; //<-------Atributos
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible)//<------Definiendo constructor
    {
        $this->nombre = $nombre;//<------Asignando los valores mediante un constructor
        $this->precio = $precio;
        $this->disponible = $disponible;

    }

    //Creando un metodo / funcion para mostrar por pantalla los resultados
    public function mostrarAtributos() {
        echo 'El producto: ' . $this->nombre . ' tiene un precio de: ' . $this->precio;
    }
}

$producto = new Producto('Tablet', 400, true);//<-------Instanciar la clase
$producto->mostrarAtributos();// LLamar al metodo

//$producto->nombre = 'Tablet'; <-------Definiendo los valores de cada atributo
//$producto->precio = 400;
//$producto->disponible = true;

echo '<pre>';
var_dump($producto);
echo '</pre>';

//Forma vieja de hacerlo---------------------------------------

//Forma nueva es en el constructor poner antes de cada atributo public y listo se elimina todo lo de this, y los atributos arriba definidos

include 'includes/footer.php';