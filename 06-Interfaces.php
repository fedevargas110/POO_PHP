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


include 'includes/footer.php';