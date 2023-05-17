<?php include 'includes/header.php';

//Definiendo la interface
interface TransporteInterface {
    public function getInfo() : string;
}


abstract class Transporte implements TransporteInterface {
    //creando constructor
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    //Metodo para mostrar datos
    public function getInfo() : string{
        return 'El transporte tiene ' . $this->ruedas . ' ruedas y tiene una capacidad de ' . $this->capacidad . ' personas.';
    }
}

class Automovil extends Transporte implements TransporteInterface{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {

    }

    public function getColor() : string {
        return ' Color: ' . $this->color;
    }
}

$auto = new Automovil(4, 5, 'Negro y Rojo');

echo $auto->getInfo();
echo $auto->getColor();


include 'includes/footer.php';