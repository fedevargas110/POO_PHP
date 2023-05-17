<?php include 'includes/header.php';

//Conectar a la base de datos con Mysqli.

$db = new mysqli('localhost', 'root', 'root34', 'bienesraices_crud');

//Creamos la query
$query = "SELECT nombre FROM vendedores;";

//$resultado = $db->query($query);
//var_dump($resultado->fetch_assoc());

//Preparamos el query
$stmt = $db->prepare($query);

//Ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($nombre);

//Asignamos sel resultado
$stmt->fetch();

//Imprimimos el resultado
var_dump($nombre);


include 'includes/footer.php';