<?php
require_once('uberPool.php');
require_once('uber_cars.php');
require_once('cuenta.php');
require_once('uberX.php');

$uberX = new UberX("AW456", new Cuenta(1002, "Sebastian Tuquerrez", "AMS123", "joan", 1002, 1002), "Tsuru", "Tuneado");
$uberX->printDataCar();

$uberPool = new UberPool("IPY123", new Cuenta(1002, "Sebastian Tuquerrez", "AMS123", "joan", 1002, 1002), "Mercedes", "2020");
$uberPool->printDataCar();
?>