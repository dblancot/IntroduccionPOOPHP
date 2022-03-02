<?php include 'includes/header.php';

// Conectar a BD con Mysqli

$db = new mysqli('localhost', 'root', 'Dener2016!', 'bienes_inmuebles');

//Creamos la query
$query = "SELECT titulo, imagen FROM propiedades";

// Preparamos la query
$stmt = $db->prepare($query);

// La ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo, $imagen);

// Asignamos el resultado e imprimimos
while ($stmt->fetch()):
    var_dump($titulo);
    var_dump($imagen);
endwhile;

include 'includes/footer.php';