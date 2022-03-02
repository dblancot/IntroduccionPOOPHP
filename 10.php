<?php include 'includes/header.php';

// Conectar a la BD con PDO
$db = new PDO(
        'mysql:host=localhost; dbname=bienes_inmuebles',
        'root',
        'Dener2016!',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
    );

//Creamos la query
$query = "SELECT titulo, imagen FROM propiedades";

// Preparamos la query
$stmt = $db->prepare($query);

// La ejecutamos
$stmt->execute();

// Creamos la variable
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC);

// Iterar
foreach($resultado as $propiedad):
    echo "<pre>";
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "</pre>";
endforeach;

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

include 'includes/footer.php';