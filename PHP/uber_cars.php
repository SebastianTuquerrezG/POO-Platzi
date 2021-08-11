<?php
require_once('cuenta.php');
class uber_cars {
    public $id;
    public $license;
    public $driver;
    public $pasageros;
    public $placa;

    public function __construct($license, $driver) {
    $this->license = $license;
    $this->driver = $driver;
    }

    public function PrintDataCar(){
    echo "license: $this->license, conductor: {$this->driver->name}, document: {$this->driver->document}";
    }
}
?>