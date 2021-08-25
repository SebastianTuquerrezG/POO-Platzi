<?php
require_once('uber_cars.php');
class UberVan extends uber_cars {
    public $typeCarAccepted;
    public $material;

    public function __construct($license, $driver, $typeCarAccepted, $material) {
        parent:: __construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->material = $material;
    }

    public function setPassenger($passenger) {
    if ($passenger == 6) {
        $this->passenger = $passenger;
    }
    else {
        echo "Necesitas asignar 6 pasajeros ";
    }
    }
}
?>