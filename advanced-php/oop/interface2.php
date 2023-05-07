<?php

interface Shape {
    public function getArea();
}

class Circle implements Shape{
    private $radius;

    public function __construct($passedRadius){
        $this->radius = $passedRadius;
    }
    public function getArea(){
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape{
    private $side;

    public function __construct($eachSide){
        $this->side = $eachSide; // assigning the value of the $eachSide parameter to the $side property of the Square object
    }
    public function getArea(){
        return pow($this->side, 2);
    }
}

$square = new Square(5);

echo $square->getArea();