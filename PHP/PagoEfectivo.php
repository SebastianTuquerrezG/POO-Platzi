<?php
require_once('pagos.php');
class PagoEfectivo extends Pagos{
    public function __construct($id, $monto) {
        parent:: __construct($id, $monto);
    }
}
?>