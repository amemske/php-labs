<?php

/*
 * public: A public member can be accessed from outside the class as well as from within the class. This is the default
 * access modifier in PHP.
 *
 * protected: A protected member can only be accessed from within the class or its subclasses.
 *
 * private: A private member can only be accessed from within the class.
 */


//public access modifier
class MyClass {
    public $publicProperty = "I am a public property";

    public function publicMethod() {
        echo "I am a public method";
    }
}

$obj = new MyClass();
echo $obj->publicProperty; // Output: I am a public property
$obj->publicMethod(); // Output: I am a public method


//protected access modifier

class MyClassTwo {
    protected $protectedProperty = "I am a protected property";

    protected function protectedMethod() {
        echo "I am a protected method";
    }
}

class MySubclass extends MyClassTwo {
    public function accessProtected() {
        echo $this->protectedProperty; // Output: I am a protected property
        $this->protectedMethod(); // Output: I am a protected method
    }
}

$obj = new MySubclass();
$obj->accessProtected();

//private access modifier

class MyClassThree {
    private $privateProperty = "I am a private property";

    private function privateMethod() {
        echo "I am a private method";
    }

    public function accessPrivate() {
        echo $this->privateProperty; // Output: I am a private property
        $this->privateMethod(); // Output: I am a private method
    }
}

$obj = new MyClassThree();
$obj->accessPrivate();

