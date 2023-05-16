<?php 

// Encapsulation is a fundamental concept in object-oriented programming that helps to ensure that
//  the internal data and behavior of a class is kept private and can only be accessed through
//   a public interface.This is typically achieved through the use of access modifiers, such as public, private, and protected.

// Note: 
// In PHP, static is not considered an access modifier like public, private, and protected.
// static is a keyword used to define class-level properties and methods that can be accessed without creating an instance of the class.



//encapsulation in PHP using access modifiers

class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }
    public function deposit($amount) {
        $this->balance += $amount;
    }
    public function withdraw($amount) {
        if($amount <= $this->balance){
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds.";
        }
    }
    public function getBalance() {
        return $this->balance;
    }
}   

$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);

echo "Balance: " . $account->getBalance(); //Balance 1300



//use of the static keyword
class Counter {
    public static $count = 0;
    
    public static function increment() {
        self::$count++;
    }
}
