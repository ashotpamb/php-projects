<?php
require_once "car.php";

class Mercedes extends Car
{

    public function makeCar()
    {

        return "Moodel ".$this->getModel()."</br>"."Color ".$this->getColor() . "</br>"."Engine ".$this->getEngine(). "</br>";
    }

    public function run()
    {
        // TODO: Implement run() method.
    }

    public function startEngine()
    {
        // TODO: Implement startEngine() method.
    }

    public function stopEngine()
    {
        // TODO: Implement runErorr() method.
    }
}