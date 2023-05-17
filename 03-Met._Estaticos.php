<?php

use Producto as GlobalProducto;

include 'includes/header.php';
//Metodos Estaticos

class Producto {
    //Atributo estatico
    public static $imagen = 'Imagen.jpg';

    //Metodos Estaticos
    public static function obteniendoValores() {
        echo 'Obteniendo los valores...';
    }

    public static function obteniendoImagen() {
        return self::$imagen;
    }

}

//A los metodos estaticos no hace falta instanciarlos
echo Producto::obteniendoValores();
echo Producto::obteniendoImagen();

include 'includes/footer.php';