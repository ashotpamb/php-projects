<?php
require_once "car.php";
class Audi extends Car{
    protected $engineState = false;

    public function makeCar()
    {
        return "Moodel ".$this->getModel()."</br>"."Color ".$this->getColor() . "</br>"."Engine ".$this->getEngine(). "</br>";
    }

    public function startEngine()
    {
        if(!$this->engineState) {
            $this->engineState = true;
            echo "Car engine Started";

        }else{
            echo "Car is alredy Started";
        }
    }

    public function stopEngine()
    {
        if(!$this->engineState) {
            echo "Car is alredy stopeed";
        }else{
            $this->engineState = false;
            echo "Car engine stopeed";

        }
    }
}
