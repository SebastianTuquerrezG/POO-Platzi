<?php
require_once('pagos.php');
class PagoCard extends Pagos{
    public $number;
    public $ccv;
    public $date;
    public $nombre;

    public function __construct($license, $monto, $number, $ccv, $date, $nombre) {
        parent:: __construct($id, $monto);
        this->number = $number;
        this->ccv = $ccv;
        this->date = $date;
        this->nombre = $nombre;
    }
}
?>