<?php
// Suppose we have a set of classes that represent different types of vehicles, such as Car, Truck, and Motorcycle.
// Each of these classes has a start method that initiates the engine of the vehicle. However, the implementation
// of the start method is different for each class, since each type of vehicle has a different engine.
// To avoid duplicating code across these classes, we can define a trait called EngineTrait that encapsulates
// the common behavior of starting the engine:

// the EngineTrait defines a start method that simply outputs a message indicating that the engine is starting.
// The trait also assumes that each class that uses it will have an $engineType property that specifies the type
// of engine for the vehicle.
// We can then use the EngineTrait in each of our vehicle classes to provide the common behavior of starting the engine

trait EngineTrait {
    public function start(){
        echo "Starting the {$this->engineType} engine ...\n";
    }
}

class Car {
    use EngineTrait;
    protected $engineType = 'gasoline';//why the use of protected?
}

class Truck {
    use EngineTrait;
    protected $engineType = 'diesel';
}

class Motocycle {
    use EngineTrait;
    protected $engineType = 'motor';
}

$car = new Car();
$truck = new Truck();
$motocycle = new Motocycle();
echo $car->start();
echo "<b>r";
echo $truck->start();
echo "<b>r";
echo $motocycle->start();
echo "<b>r";