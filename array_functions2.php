<?php
/*
 * The array_count_values() function is a built-in PHP function that counts the frequency of values in an array and returns an
 * associative array where the keys are the unique values from the original array, and the values are the respective counts.
 */

$array = [ 'banana', 'apples','mangoes','apples','banana','mangoes','apples','apples'];

$result = array_count_values($array);

var_dump($result);
/*
 * array(3) {
  ["banana"]=>
  int(2)
  ["apples"]=>
  int(4)
  ["mangoes"]=>
  int(2)
}

 */
/*
 * The array_diff_assoc() function is a built-in PHP function that compares the key-value pairs
 *  of two or more arrays and returns an array containing the differences.
 *  It performs a comparison considering both the keys and the values of the arrays.
 */

$array1 = ['a' => 1, 'b' => 2, 'c' => 3,];
$array2 = ['a' => 1, 'b' => 4, 'c' => 3,];
$array3 = ['a' => 5, 'b' => 2, 'c' => 3,];

$diff = array_diff_assoc($array1, $array2, $array3);

var_dump($diff);

