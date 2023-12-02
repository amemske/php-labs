<?php

//the use keyword demonstrates the concept of capturing variables from the outer scope in an anonymous function

function createMultiplier($factor): Closure
{
    return function ($number) use ($factor){
        return $number * $factor;
    };
}

$multiplier = createMultiplier(4);
$result = $multiplier(8);
echo $result;
