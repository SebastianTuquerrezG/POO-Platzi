<?php
require_once('cuenta.php');
class uber_cars {
    public $id;
    public $license;
    public $driver;
    protected $pasageros;
    public $placa;

    public function __construct($license, $driver) {
    $this->license = $license;
    $this->driver = $driver;
    }

    public function PrintDataCar(){
    echo "license: $this->license
        conductor: {$this->driver->name}
        document: {$this->driver->document}
        Número de pasajeros: $this->passenger
        ";
    }

    public function getPasagero() {
    return $this->pasageros;
    }
    public function setPassenger($passenger) {
    if ($passenger == 4) {
        $this->passenger = $passenger;
    }
    else {
        echo "Necesitas asignar 4 pasajeros";
    }
    }
}
?>