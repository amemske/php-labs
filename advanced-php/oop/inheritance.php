<?php

class Chef
{
    function makeBread()
    {
        echo "The chef makes bread";
    }
}

class ItalianChef extends Chef
{
    function makePasta()
    {
        echo "The chef makes pasta";
    }
    //overide a function
    function makeBread()
    {
        echo "The chef makes Italian bread";
    }
}

$chef1 = new Chef();
echo $chef1->makeBread();

echo "<br>";

$chef2 = new ItalianChef();
echo $chef2->makeBread();