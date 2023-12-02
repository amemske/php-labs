<?php
/*
 * Lack of Contract: With duck typing, there's no formal contract that the classes must adhere to.
 * While you're checking for the existence of the play method, there's no clear definition of what
 * kind of behavior is expected from the instrument objects.

Less Predictable: Duck typing can lead to less predictable behavior if objects with different methods
 are passed to the same function. If an object with a play method that behaves differently is passed
 to playInstrument, unexpected results might occur.

Readability and Maintenance: Interfaces provide a clear contract that's easy to understand, while duck
typing can make the code less self-explanatory and harder to maintain.
 */




class Guitar {
    public function play(){
        echo 'Messing with the guitar';
    }
}

class Piano {
    public function play(){
        echo "Pressing Piano keys";
    }
}

function playInstrument($instrument){
    if (method_exists($instrument, 'play')) {
        $instrument->play();
    } else {
        echo "Cannot play this instrument.";
    }
}

$guitar = new Guitar();
$piano = new Piano();

playInstrument($guitar);
playInstrument($piano);
