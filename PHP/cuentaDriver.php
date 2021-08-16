<?php
require_once('cuenta.php');
class CuentaDriver extends cuenta {
    public $carro;
    
    public function __construct($id, $name, $document, $email, $password, $number, $carro) {
        parent:: __construct($id, $name, $document, $email, $password, $number);
        $this->carro = $carro;
    }
}
?>
