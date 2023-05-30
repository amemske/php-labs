<?php

/*
 * In PHP, a hash map is an associative array that maps keys to values. It is also sometimes referred to as a dictionary
 *  or a hash table. The keys can be strings or integers, and the corresponding values can be of any type.
 */

$months = array(
    'Jan' => 31,
    'Feb' => 28,
    'Mar' => 31,
    'Apr' => 30,
    'May' => 31,
);

echo $months['Feb'];

unset($months['Mar']);//remove from array

echo $months['Mar'];

