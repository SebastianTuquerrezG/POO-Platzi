<?php
class cuenta {
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;
    public $number;

    public function __construct($id, $name, $document, $email, $password, $number) {
    $this->id = $id;
    $this->name = $name;
    $this->document = $document;
    $this->email = $email;
    $this->password = $password;
    $this->number = $number;
    }
}
?>