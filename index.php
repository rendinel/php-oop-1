<?php

class Auto {
    public $make;

    public $model;

    public $kw;

    public function __construct($make,$model,$kw) {
        $this->make = $make;
        $this->model = $model;
        $this->kw = $kw;
    }
}

class Garage {
    public $name;

    private $firstfloor = [];

    public function __ construct($name){
        $this->name = $name;
    }

    public function addCar(Auto $Firstfloor){ 
        $this->firstfloor[] = $ff;
    }

    public function getCars() {
        return $this->firstfloor;
    }
}

$rx7 = new Auto('Maxda','Rx-7','176kw');
$r33 = new Auto('Nissan','Skyline gtr r-33','441');
$gt3000 = new Auto('Mitsubishi','3000 gt', '221');

$parking = new Garage('Pimo Piano');
$parking->addCar($rx7);

print_r($parking->getCars());