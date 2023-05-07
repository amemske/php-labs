<?php
//Write a PHP function that takes an array of integers as input and returns the highest and lowest numbers in the array.
// Algorithm:

// Initialize variables $max and $min to the first element in the array.
// Loop through each element in the array, starting from the second element.
// For each element, compare it to $max and $min.
// If the element is greater than $max, update $max to the element.
// If the element is less than $min, update $min to the element.
// After looping through all elements, return $max and $min as an array

function findMinMax(array $arr){
  $max =  $arr[0];
  $min = $arr[0];
    foreach($arr as $item ){
        if ($item > $max){
            $max = $item;
        } 
        if ($item < $min){
            $min = $item;
        }
      

    }
    return [$max, $min];
}
$numbers = [2,4,-5,10,3];
  [$max, $min] = findMinMax($numbers);

  echo 'Max number is' .  $max . ' and' . ' Min number is ' . $min;