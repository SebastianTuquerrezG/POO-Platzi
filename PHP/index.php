<?php
require_once('uberPool.php');
require_once('uber_cars.php');
require_once('cuenta.php');
require_once('uberX.php');
require_once('uberVan.php');

$uberX = new UberX("AW456", new Cuenta(1002, "Sebastian Tuquerrez", "AMS123", "joan", 1002, 1002), "Tsuru", "Tuneado");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberPool = new UberPool("IPY123", new Cuenta(1002, "Sebastian Tuquerrez", "AMS123", "joan", 1002, 1002), "Mercedes", "2020");
$uberPool->setPassenger(4);
$uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Cuenta(1002 ,"Raúl Ramírez", "AND456", "joan", 1002, 1002), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
?>