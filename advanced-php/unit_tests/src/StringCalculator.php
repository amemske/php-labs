<?php
namespace App;

class StringCalculator
{

    public function add(String $numbers): int
    {
        $delimiter = "/,|\n/";

        if(empty($numbers)){
        return 0;
        }

        if(preg_match("/\/\/(.)\n/", $numbers, $matches)){
            $delimiter = $matches[1];
            $numbers = str_replace($matches[0], '',$numbers);

        }
        var_dump($delimiter);
        var_dump($numbers);

       // $numbers = explode(",", $numbers); // [5,5]
        $numbers = preg_split("/{$delimiter}/", $numbers);
        var_dump($numbers);

        //check for negative number
        if (!is_array($numbers)) {
            throw new \Exception('Input string could not be parsed');
        }

       foreach ($numbers as $number) {
           if ($number < 0) {
               throw new \Exception('Negative numbers are not allowed');
           }
       }


        $numbers = array_filter($numbers, function($number) {
            return $number < 1000;
        });

       return array_sum($numbers);
    }

}

$calculator = new StringCalculator();
$result = $calculator->add("//;\n6;3");