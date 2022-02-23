<?php include 'includes/header.php';

// HERENCIA

class Transporte {
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


class Bicicleta extends Transporte {

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y no tiene motor";
    }

}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
    
}

$bicicleta = new Bicicleta(2, 1);

echo "<pre>";
echo $bicicleta->getInfo();
echo "</pre>";
echo "<pre>";
echo $bicicleta->getRuedas();
echo "</pre>";
echo "<hr>";

$auto = new Automovil(4, 4, 'manual');

echo "<pre>";
echo $auto->getInfo();
echo "</pre>";
echo "<pre>";
echo $auto->getTransmision();
echo "</pre>";
echo "<hr>";

include 'includes/footer.php';