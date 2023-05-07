<?php

class MyClass {
    private static $count = 0;
    // increment the count of objects created
    public function __construct() {
        self::$count++;
    }
    // return the count of objects created
    public static function getCount(){
        return self::$count;
    }
}

$obj1 = new MyClass();
$obj2 = new MyClass();
$obj3 = new MyClass();

echo MyClass::getCount(); //output 3