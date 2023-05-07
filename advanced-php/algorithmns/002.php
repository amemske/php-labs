<?php
// Problem: Write a function that takes an array of integers as input and returns a new array 
//with all the even numbers in the input array, sorted in ascending order.

// Algorithm:

// Initialize an empty array $result.
// Loop through each element in the input array.
// If the element is even, add it to $result.
// After looping through all elements, sort $result in ascending order.
// Return $result.

function evenNumbers(array $arr){
    $allEvenNumbers = [];
    foreach ($arr as $item) {
        if ($item % 2 === 0) {
            array_push($allEvenNumbers, $item);
        }
    }
    sort($allEvenNumbers);//you should call the sort function before returning the array since it returns a bool
    return $allEvenNumbers;
}

$numbers  = [1, -3, 4, 6, 11, 5, 8];

print_r(evenNumbers($numbers)) ;