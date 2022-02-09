<?php
require_once 'RunCar.php';
abstract class Car implements RunCar {
    public $model;
    public $color;
    public $engine;
    abstract protected function makeCar();

    public function __construct()
    {

    }

    public function setModel($model) {
        $this->model = $model;
    }
    public function getModel() {
        return $this->model;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
    public function setEngine($engine) {
        $this->engine = $engine;
    }
    public function getEngine() {
        return $this->engine;
    }
    public function getCar() {
        echo $this->makeCar();
    }

}