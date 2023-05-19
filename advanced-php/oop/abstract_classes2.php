<?php

abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo" {$this->name} makes the sound Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "{$this->name} makes the sound Meow!";
    }
}

$dog = new Dog("Fido");
$cat = new Cat("Whiskers");

$dog->makeSound(); // Output: Fido makes the sound Woof!
$cat->makeSound(); // Output: Whiskers makes the sound Meow!