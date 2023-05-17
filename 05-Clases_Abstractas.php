<?php include 'includes/header.php';

//Herencia de Clase 3 piedra Angular

//Creando la clase padre
abstract class Transporte {
    //creando constructor
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    //Metodo para mostrar datos
    public function getInfo(){
        return 'El transporte tiene ' . $this->ruedas . ' ruedas y tiene una capacidad de ' . $this->capacidad . ' personas.';
    }
}

class Bicicleta extends Transporte {
    
}

$bici = new Bicicleta(2, 1);

echo $bici->getInfo();


include 'includes/footer.php';