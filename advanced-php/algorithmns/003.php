<?php
// Write a function that takes an array of integers as input and returns the sum of all the even numbers in the array.

// Here's an example input and output:

// Input: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
// Output: 30

// Note: You should not use any built-in PHP functions to solve this problem.

//algorithmn
//create a function ArraySum
//initialize it with an empty string $result to hold the values
//loop through the array
//with each loop, store the number and add 1
//return the $result

function ArraySum(array $numArray){
    $result = 0;
    foreach ($numArray as $number){
        if($number % 2 == 0){ // check whether its an even number
            $result +=  $number; //add to the result, increment
        }
    }
    return $result;
}

echo ArraySum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);