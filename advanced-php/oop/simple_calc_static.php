<?php
//create a new class
//create a static add operation that takes in two arguments
//create a static subtract operation that takes in two arguments
//create a static multiply operation that takes in two arguments
//create a static divide operation that takes in two arguments


class Calculator {
    public static function add($number1, $number2){
        return $number1 + $number2;
    }
    public static function subtract($number1, $number2){
        return $number1 - $number2;
    }
    public static function divide($number1, $number2){
        return $number1 / $number2;
    }
    public static function multiply($number1, $number2){
        return $number1 * $number2;
    }
}

echo Calculator::multiply(4,7);


