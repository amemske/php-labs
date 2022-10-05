<?php
//private - only this class should access the method
//protected -children can access the  method, internal things should not be exposed to the outside world
class Person {
public function grades() {
    echo 'I got an A+';
}
private function badHabits(){ //private is stricter than protected  
    echo 'I smoke too much';
}

}

$method = new \ReflectionMethod(Person::class, 'badHabits');
$method->setAccessible(true);

$person = new Person('Bob');
$method->invoke($person);

