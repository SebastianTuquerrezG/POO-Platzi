<?php
require_once('uber_cars.php');
class UberBlack extends uber_cars {
    public $typeCarAccepted;
    public $material;

    public function __construct($license, $driver, $typeCarAccepted, $material) {
        parent:: __construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->material = $material;
    }
}
?>