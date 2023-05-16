<?php 

// Polymorphism allows objects of different classes to use the same methods but with different implementation,
// which means that they can respond to the same methods in different ways. This is typically achieved
//  through inheritance and method overriding, where a subclass can override a method of its parent class
//   to provide a different implementation.

class Animal {
    public function makeSound() {
        echo "The animal makes a sound.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "The dog barks.";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "The cat meows.";
    }
}

$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

$animal->makeSound(); // The animal makes a sound.
$dog->makeSound(); // The dog barks.
$cat->makeSound(); // The cat meows.