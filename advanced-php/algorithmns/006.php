<?php
// Write a PHP function that takes an array of integers as input and returns the sum of
// all the positive integers in the array.

// Here are some additional requirements and constraints for the function:

// The input array can contain both positive and negative integers.
// If the input array is empty, the function should return 0.
// The function should have a time complexity of O(n), where n is the length of the input array.
// You can use any built-in PHP functions to solve the problem.

function sumOfArrayValues(Array $myArray) {
    //remove empty value from the array
    $positiveArray = array();
    foreach ($myArray as $item){
        if($item > 0){
            //create a new array with only positive values
            $positiveArray[] = $item;
        }

    }

    //if array is empty return 0
    if (empty($positiveArray)){
        return 0;
    } else {
//else add the sum of the new array
        return array_sum($positiveArray);
    }

}


echo sumOfArrayValues([-3,-1,2,4,5,6]);