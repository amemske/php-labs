<?php 

// Late static binding is a feature in PHP that allows a child class to reference its parent class's
//  properties and methods using the static keyword. This allows you to write code that is more flexible
//  and easier to maintain, as you can change the behavior of individual classes without affecting the
//  behavior of their parent classes.


// In this example, we define a base class called Animal with a static property called $name and a static method
// called speak(). The speak() method uses the static keyword to reference the $name property of the class that called the method.

// We then define a child class called Cat that extends the Animal class and overrides the $name property with a new value of "Cat".

// When we call the speak() method on the Animal class, it outputs "I am a Animal", because the $name property of the Animal class is set to "Animal".
//  When we call the speak() method on the Cat class, it outputs "I am a Cat", because the $name property of the Cat class is set to "Cat".

// In this example, late static binding allows us to reference the $name property of the child class (Cat) from within the parent class (Animal) 
// without having to hardcode the class name. This makes our code more flexible and easier to maintain, as we can change the value of $name in the
//  child class without affecting the behavior of the parent class.

class Animal {
    public static $name = 'Animal';
    public static function speak(){
        echo 'I am a ' . static::$name . "\n";
    }
}

class Cat extends Animal {
    public static $name = 'cat';
    
}

Animal::speak();
Cat::speak();
