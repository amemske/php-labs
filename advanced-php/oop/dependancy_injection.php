<?php 

/* Dependency Injection (DI) is a technique used in software development to decouple
  classes and promote code reusability. It involves passing dependencies
  (such as objects or values) into a class from external sources, rather
   than having the class create or retrieve them directly.
   This makes the class more modular and flexible, as it can be easily adapted to work
   with different dependencies without requiring changes to its implementation 
    */


// We define a function called playInstrument() that takes an argument of type Playable.
//  This means that any object passed to this function must implement the Playable interface,
//  which requires having a play() method. Inside the function, we call the play() method on the passed object.

interface Playable {
    public function play();
}

class Guitar implements Playable {
    public function play(){
        echo 'Messing with the guitar';
    }
}

class Piano implements Playable {
    public function play(){
        echo "Pressing Piano keys";
    }
}

function playInstrument(Playable $instrument): void
{
    $instrument->play();
}

$guitar = new Guitar();
$piano = new Piano();

playInstrument($guitar);
playInstrument($piano);

