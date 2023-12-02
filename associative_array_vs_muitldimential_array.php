<?php

/*
 * In a multi-dimensional array, each element of the array is itself an array.
 *
 * Example muti-dimentional array
 */

$array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo $array[1][2]; // Outputs 6

/*
 * associative array example
 */

$array = array(
    'query' => array( 'results' => 10)
);

echo $array['query']['results']; // Outputs 10