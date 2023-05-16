<?php

/*
 * The decorator pattern is a way to dynamically add extra features or behavior to an object without changing its original code.
 *  This pattern is  useful when there is a need to modify the behavior of an object at runtime or
 *  when the modification needs to be applied selectively to specific objects.
 *
 * */

interface CarService {
    public function getCost();
    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost(): int
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService {
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): int
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ' and oil change';
    }
}

class TireRotation implements CarService {
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): int
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ' and tire rotation';
    }
}

echo (new TireRotation(new OilChange(new BasicInspection())))->getCost(); //wrap what you want on top.-> decorator

echo "\n";

$service = new OilChange(new TireRotation(new BasicInspection()));
echo  $service->getDescription();


