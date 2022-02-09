<?php
require_once "car.php";

class Bmw extends Car
{
    protected function makeCar()
    {
        return "Moodel " . $this->getModel() . "</br>" . "Color " . $this->getColor() . "</br>" . "Engine " . $this->getEngine() . "</br>";

    }

    public function startEngine()
    {
        // TODO: Implement run() method.
    }

    public function stopEngine()
    {
        // TODO: Implement runErorr() method.
    }
}