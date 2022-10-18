<?php

class Ship{
    private $name;
    private $weaponPower = 0;
    private $jediFactor = 0;
    private $strength = 0;
    private $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(0,100) < 30;
    }
    public function isFunctional () {
        return !$this->underRepair;
    }

    public function sayHello(){
        echo "Hello";
    }
    public function getName(){
        return $this->name;
    }
    public function getNameAndSpecs($useShortFormat = false){
        if($useShortFormat){
            return sprintf('%s: %s, %s, %s', $this->name, $this->weaponPower, $this->jediFactor, $this->strength);
        } else {            
            return sprintf('%s: w:%s, j:%s, s:%s', $this->name, $this->weaponPower, $this->jediFactor, $this->strength);
        }
    }
    public function doesGivenShipHaveMoreStrength($givenShip){
        return $givenShip->strength > $this->strength;
    }
    public function setName($name){
        return $this->name =  $name;
    }
    public function setJediFactor($jediFactor){
        return $this->jediFactor =  $jediFactor;
    }
    public function getJediFactor(){
        return $this->jediFactor;
    }
    public function setWeaponPower($weaponPower){
        return $this->weaponPower =  $weaponPower;
    }
    public function getWeaponPower(){
        return $this->weaponPower;
    }
    public function setstrength($strength){
        return $this->strength =  $strength;
    }
    public function getstrength(){
        return $this->strength;
    }
    

}
