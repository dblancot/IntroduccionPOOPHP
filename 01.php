<?php declare( strict_types = 1);

include 'includes/header.php';

// Definir una clase
class Producto {
    public function __construct( public string $nombre, public int $precio, public bool $disponible) {}
}

$producto = new Producto('Tablet', 150, true);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 300, true);

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';