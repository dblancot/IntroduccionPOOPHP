<?php declare( strict_types = 1);

include 'includes/header.php';

// ENCAPSULACIÓN

// Definir una clase
class Producto {

    // Public - Se puede acceder y modificar en cualuier lugar (clase y objeto)
    // Protected - Se puede acceder/modificar únicamente en la clase
    // Private - Sólo miembros de la misma clase pueden acceder a él. (con una clases se comporta como el protected, si hay herencia no)



    public function __construct( protected string $nombre, public int $precio, public bool $disponible) {}

    // Métodos
    public function mostrarProducto() : void {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

}

$producto = new Producto('Tablet', 150, true);
// $producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 300, true);
// $producto2->mostrarProducto();

echo $producto2->getNombre();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';