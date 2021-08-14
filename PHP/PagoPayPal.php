<?php
require_once('pagos.php');
class PagoPayPal extends Pagos{
    public $email;

    public function __construct($license, $monto, $number, $ccv, $date, $nombre) {
        parent:: __construct($id, $monto);
        this->email = $email;
    }
}
?>