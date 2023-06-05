<?php
/*
 * The strpos() function in PHP is used to find the position of the first occurrence of a substring within a string.
 * It takes two arguments: the input string to search within, and the substring to search for.


 */
$string = "Hello World";
$stringToCheck = "Hello";


$position = strpos($string, $stringToCheck);
if ($position !== false) {
    echo " The substring {$stringToCheck} is found at position: {$position}";
} else {
    echo " The substring {$stringToCheck} is  not found in the string";
}

//output "The substring 'Hello' is found at position: 0"


//The substr() function is used to extract a substring from a string.
// It allows you to select a portion of a string based on the starting position and length.

$string2 = " Hello World";
$substring = substr($string, 0, 5);

echo $substring;
//output Hello