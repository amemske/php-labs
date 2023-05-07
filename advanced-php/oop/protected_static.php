<?php
//A protected static property can be accessed from within the class where it is defined,
// as well as from any subclasses that inherit from the class.

class MyClass {
    protected static $myStaticPropery = 'hello';

    public function getStaticPropery(){
        return self::$myStaticPropery;
    }

}

class MySubClass extends MyClass {
    public function getStaticPropery()
    {
        return self::$myStaticPropery;
    }
}

$obj = new MyClass();
echo $obj->getStaticPropery();

$subObj = new MySubClass();
echo $subObj->getStaticPropery();

