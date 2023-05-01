<?php

require_once __DIR__.'/Ship.php';

function printShipSummary($someShip) {
    echo "My ship is " . $someShip->name;
    echo "<hr/>";   
    $someShip->sayHello();   
    echo "<hr/>";   
    echo $someShip->getName();   
    echo "<hr/>";   
    echo $someShip->getNameAndSpecs(false);   
    echo "<hr/>";   
    echo $someShip->getNameAndSpecs(true);   
    echo "<hr/>";
    var_dump($someShip->weaponPower);
}

//Instantiate

$myNewShip = new Ship();
$myNewShip->name = "Star wars ship";
$myNewShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = "Imperial Shuttle";
$otherShip->weaponPower = 5;
$otherShip->strength = 50;


//Results
printShipSummary($myNewShip);
echo "<hr/>";
printShipSummary($otherShip);

echo "<hr/>";

if($myNewShip->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->name . ' has more strength';
} else {
    echo $myNewShip->name . ' has more strength';

}


