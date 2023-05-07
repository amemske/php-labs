<?php

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

function playInstrument(Playable $instrument){
$instrument->play();
}

$guitar = new Guitar();
$piano = new Piano();

playInstrument($guitar);
playInstrument($piano);

