<?php declare( strict_types = 1);

include 'includes/header.php';

// Definir una clase
class Producto {

    public $nombre;
    public $precio;
    public $disponible;

    //Constructor
    public function __construct( string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 200, true);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 300, true);

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';