<?php

namespace App;



class RomanNumerals
{
    const NUMERALS = [
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];
    public static function generate($number): string
    {
        if ($number < 1 || $number > 3999){
            return "";
        }

        $result = "";
            foreach (static::NUMERALS as $numerals => $value ){
                while ($number >= $value) {
                    $result .= $numerals; //append
                    $number -= $value;
                }
            }
            return $result;




    }


}