<?php
require_once('uber_cars.php');
class UberX extends uber_cars {
    public $marca;
    public $modelo;

    public function __construct($license, $driver, $marca, $modelo) {
        parent:: __construct($license, $driver);
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function PrintDataCar(){
        parent::PrintDataCar();
        echo"
        Modelo: $this->modelo
        Marca: $this->marca
        ";
    }
}
?>