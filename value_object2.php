<?php
class Coordinates {
    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function pin(Coordinates $coordinates){
    $coordinates->x;
}

function distance(Coordinates $begin, Coordinates $end){

}