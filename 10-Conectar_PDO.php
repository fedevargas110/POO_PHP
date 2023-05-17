<?php include 'includes/header.php';

//Conectar la BD con PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root34');

$query = "SELECT * FROM vendedores;";

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetch();

var_dump($resultado);

include 'includes/footer.php';