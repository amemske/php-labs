<?php

/*
 * the static keyword can be used to declare class members (properties and methods) that belong to the class itself,
 *  rather than to instances of the class.
 * This means that you can access static members without creating an object of the class.
 *
 * The static keyword does not change the behavior of private or protected members in PHP.
 * It is a good choice to use static keyword if you know there will always be one instance of the class.
 */


class House {
   public static $cupboard = "Filled with things";
   public function cupboardValue (){
      return self::$cupboard;
   }


}

class Room extends House {
    public function cupboardStaticValue()
    {
        return parent::cupboardValue();
    }
}

echo House::$cupboard . "\n"; //Filled with things
$house = new House;
echo $house->cupboardValue() . "\n"; //Filled with things
echo $house::$cupboard . "\n"; //Filled with things

echo Room::$cupboard . "\n"; //Filled with things
$room = new Room();
echo $room->cupboardStaticValue() . "\n"; //Filled with things
