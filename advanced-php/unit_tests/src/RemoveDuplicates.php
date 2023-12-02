<?php

namespace App;

/*
 * Write a PHP class method withoutDuplicates() that takes a string as input and removes any duplicate characters from it.
 *  The method should return the modified string without duplicates.
 */

class RemoveDuplicates
{
    function withoutDuplicates($string): void
    {

        $result = implode('', array_unique(str_split($string)));
        echo $result;
    }

}
 $removeDuplicates = new RemoveDuplicates;
 $removeDuplicates ->withoutDuplicates("Hello World");