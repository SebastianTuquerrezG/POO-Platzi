<?php
require_once('cuenta.php');
class CuentaUser extends cuenta {

    public function __construct($id, $name, $document, $email, $password, $number) {
        parent:: __construct($id, $name, $document, $email, $password, $number);
    }
}
?>
