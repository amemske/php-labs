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
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$dog = new Dog("Fido");
$cat = new Cat("Whiskers");

$dog->makeSound(); // Output: Woof!
$cat->makeSound(); // Output: Meow!