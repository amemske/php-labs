<?php
//Mutable - the internal state can be changed.
//Immutable - the internal state can never be changed.
class Age {
    private $age;
    public function __construct($age)
    {
        if( $age<0 || $age > 120){
            throw new InvalidArgumentException('That makes no sense');
        }
        $this->age = $age;
    }
    //mutable
    public function increment(){
        $this->age +=1;
    }

    public function decrement(){
        return new self($this->age -=5);
    }
    public function get(){
        return $this->age;
    }
}

function register(string $name, Age $age){

}

$age = new Age(36);
register('John', $age);
$age->increment();

var_dump($age->get());


$newAge = $age->decrement();
var_dump($newAge->get());

//register('John', new Age(500));