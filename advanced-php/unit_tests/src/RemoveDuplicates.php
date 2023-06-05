<?php

namespace App;

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