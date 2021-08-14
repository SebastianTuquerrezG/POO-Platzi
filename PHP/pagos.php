<?php
class pagos {
    public $id;
    public $monto;

    public function __construct($id, $monto){
        this->id = $id;
        this->monto = $monto;
    }

    public function PrintDataCar(){
    echo "id: {$this->id}, monto: {$this->monto}";
    }
}
?>