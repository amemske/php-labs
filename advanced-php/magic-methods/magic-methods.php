<?php
// In PHP, magic methods are special methods that are automatically called by the interpreter
// in response to certain events, such as accessing a property or calling a method that doesn't
// exist. Magic methods provide a way to customize the behavior of objects in PHP and make
// them more flexible and dynamic.
// In this example, we define a Person class that has two private properties: $name and $age. 
// We also define three magic methods: __get, __set, and __call.
// The __get method is called when an attempt is made to access a non-public property of an object. 
// In this example, we use the __get method to allow access to the $name and $age properties of the Person object.
// The __set method is called when an attempt is made to assign a value to a non-public property of an object. 
// In this example, we use the __set method to allow setting the $name and $age properties of the Person object.
// The __call method is called when an attempt is made to call a non-existent method of an object.
//  In this example, we use the __call method to define a custom method called getAgeInDays
// that returns the age of the person in days.
// We can now create a Person object and use the magic methods to interact with its properties and methods:

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    //allow access to the $name and $age properties of the Person object.
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }
    //to allow setting the $name and $age properties of the Person object.
    public function __set($property, $value){
        if(property_exists($this, $property)){
             $this->$property = $value;
        }
        return $this;
    }
    //call a non-existent method of an object. 
    public function __call($method, $arguments) {
        if($method === 'getAgeInDays') {
            return $this->age * 365;
        }

    }

}

$person = new Person('John Doe', 30);
echo $person->name;
echo $person->age;
echo $person->getAgeInDays();