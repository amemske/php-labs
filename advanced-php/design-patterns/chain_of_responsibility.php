<?php

/*
 * the Chain of Responsibility design pattern allows you to create a chain of objects that can handle requests or tasks in a specific order.
 *Each object in the chain has the ability to handle the request or pass it on to the next object in the chain.
 *This can be useful when you have a series of operations that need to be performed in a specific order, and each operation can be handled by a different object
 *
 *
 * For example, in the code you provided, $locks->check(new HomeStatus()); triggers the chain of responsibility by calling the check() method on the $locks object
 * and passing in a new HomeStatus object. The check() method in the Locks class checks if the doors are locked. If the doors are locked, it calls $this->next($homeStatus);
 *  to pass the HomeStatus object to the next object in the chain (in this case, $lights). If the doors are not locked, an exception is thrown and the chain is stopped.
 */
abstract  class Homechecker {
    protected $successor; //next object in the chain

    public abstract function check(HomeStatus $homeStatus): void;

    public function succeedWith(Homechecker $successor) { //sets the next object in the chain
        $this->successor = $successor;
    }
    public function next(HomeStatus $homeStatus) {
        if($this->successor){
            $this->successor->check($homeStatus);
        }

    }
}
class HomeStatus {
    public $alarmOn = true;
    public $lightsOff  = true;
    public $locked = true;
}

class Locks  extends Homechecker {
    public function check(HomeStatus $homeStatus): void
    {
        if(! $homeStatus->locked){
            throw new Exception('The doors are not locked!! Abort.');
        }
        $this->next($homeStatus);

    }

}

class Lights  extends Homechecker {
    public function check(HomeStatus $homeStatus): void
    {
        if(! $homeStatus->lightsOff){
            throw new Exception('The lights are still on!! Abort.');
        }
        $this->next($homeStatus);

    }
}

class Alarm  extends Homechecker {
    public function check(HomeStatus $homeStatus): void
    {
        if(! $homeStatus->alarmOn){
            throw new Exception('The alarm is off!! Abort.');
        }
        $this->next($homeStatus);

    }
}

$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus());