<?php
//create class Calculator





class Calculator {
    //instantiate the result
    private int $result;
//create a function that Returns the result
    public function getResults(){
        return $this->result;
    }
//create a function to add that takes in two argument
    public function add($number1, $number2){
        $this->result = $number1 + $number2;
    }
//create a function to subtract that takes in two arguments
    public function subtract($number1, $number2){
        $this->result = $number1 + $number2;
    }
//create a function to multiple that takes in two arguments
    public function multiply($number1, $number2){
        $this->result = $number1 * $number2;
    }
//create a function to divide that takes in two arguments
    public function divide($number1, $number2){
        if ($number2 == 0){
            throw new Exception("Cannot divide by zero");
        }
        $this->result = $number1 / $number2;
    }
}


$calculator = new Calculator();

 $calculator->add(7,2);
echo $calculator->getResults();