<?php

//strlen(): Return the length of a string

$string1 = "Hello, world!";
$length = strlen($string1);
echo $length; //output 13

//strpos(): Searches for a substring within a string and returns the position of the first occurrence.

$string2 = "Hello, world!";
$position = strpos($string2, "world");
echo $position;// output 7

//str_replace(): Replaces all occurrences of a substring with another substring in a string.
$string3 =  "Hello, world!";
$newString = str_replace('world', 'everyone', $string3);
echo $newString; // Output: Hello, everyone!

//substr(): Returns a portion of a string.
$string4 = "Hello, world!";
$substring = substr($string4, 7);
echo $substring;

//strtolower(): Converts a string to lowercase.

$string5 = "HELLO, world!";
$lowercase = strtolower($string5);
echo $lowercase;// Output: hello, world!

//strtoupper(): Converts a string to uppercase.

$string6 = "Hello, world!";
$uppercase = strtoupper($string6);
echo $uppercase; // Output: HELLO, WORLD!

//trim(): Removes whitespace or other specified characters from the beginning and end of a string.
$string7 = " Hello, world ";
$trimmed = trim($string7);
echo  $trimmed; // Output: Hello, world!

// Output: apple, banana, orange

$array1 = ['apples', 'banana', 'orange'];
$delimeter1 = ', ';
$string = implode($delimeter1, $array1);
print_r($array1);// Output: apple, banana, orange

//explode(): Splits a string into an array of substrings based on a specified delimiter.

$string8 = "apples, bananas,orange";
$delimeter2 = ', ';
$stringArray = explode($delimeter2, $string8);
print_r($stringArray); // Output: Array ( [0] => apple [1] => banana [2] => orange )