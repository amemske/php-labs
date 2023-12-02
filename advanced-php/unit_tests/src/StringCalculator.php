<?php

namespace App;

class StringCalculator
{

    public function add(string $numbers): int
    {
        $delimiter = "/[,\\n]/";

        if (empty($numbers)) {
           // var_dump($numbers);
            return 0;
        }


        if (preg_match("/\/\/(.)\\n/", $numbers, $matches)) {
            $foundDelimiter = $matches[1];
            $numbers = str_replace($matches[0], '', $numbers);
        }

        $numbers = preg_split($delimiter, $numbers);
       // var_dump($numbers);

        foreach ($numbers as $number) {
            if ($number < 0) {
                throw new \Exception('Negative numbers are not allowed');
            }
        }

        $numbers = array_filter($numbers, function ($number) {
            return $number < 1000;
        });

        return array_sum($numbers);
    }
}

$calculator = new StringCalculator();
$result = $calculator->add('');