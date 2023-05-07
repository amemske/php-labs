<?php

class MyClass {
    private $count = 0;
    // increment the count of objects created
    public function __construct() {
        $this->count++;
    }
    // return the count of objects created
    public function getCount(){
        return $this->count;
    }
}

$obj1 = new myClass();

echo $obj1->getCount(); //output 1