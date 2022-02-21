<?php include 'includes/header.php';

// Definir una clase
class Producto {

    public $nombre;
    public $precio;
    public $disponible;

}

$producto = new Producto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

include 'includes/footer.php';