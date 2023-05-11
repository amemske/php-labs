<?php

namespace App;
class PrimeFactors
{
    public function  generate($number): array
    {
        //is the number divisible by 2
        //if true, then divide by 2, if false, increase candidate and try again

        $factorsArray = [];
        $divisor = 2;
while($number > 1){
        while ($number % $divisor === 0) {
            $factorsArray[] = $divisor; //push 2 into the array
            $number = $number / $divisor; //divide by 2
        }
        $divisor++;
    }
        return $factorsArray; //return empty factors array

    }

}