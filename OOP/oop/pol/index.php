<?php
require_once "Bmw.php";
require_once "Audi.php";
require_once "Mercedes.php";
require_once "Nissan.php";


$classes = scandir('.');
$classes = array_diff($classes, ['.', '..', 'index.php', 'Car.php']);


//if (is_file()) {
//
//}
//
//if (file_exists()) {
//
//}
//
//if (class_exists()) {
//
//}

//
$audi = new Audi();
$audi->setModel("Audi");
$audi->setColor("Black");
$audi->setEngine("2.5");
$audi->startEngine();
$audi->stopEngine();

//
//$bmw = new Bmw();
//$audi = new Audi();
//$bmw->makeCar();
//$audi->makeCar();