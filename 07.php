<?php

use Transporte as GlobalTransporte;
use TransporteInterface as GlobalTransporteInterface;

 include 'includes/header.php';

interface TransporteInterface {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterface {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements GlobalTransporteInterface {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color " . $this->color;
    }

    public function getColor() : string {
        return "El color es " . $this->color;
    }

}

echo "<pre>";
var_dump($transporte = new Transporte(6, 20));
var_dump($auto = new Automovil(4, 4, 'Rojo'));
echo "</pre>";

echo "<pre>";
echo $transporte->getInfo();
echo "</pre>";

echo "<pre>";
echo $auto->getInfo();
echo "<br>";
echo $auto->getColor();
echo "</pre>";

include 'includes/footer.php';