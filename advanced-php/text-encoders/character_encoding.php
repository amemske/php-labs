<?php
//mb_convert_encoding(): Converts the character encoding of a string.
$string1 = "Hello, 世界!";
$convertedString = mb_convert_encoding($string1,'UTF-8', 'UTF-16LE');
echo $convertedString; // // Output: Hello, 世界!

//mb_strlen(): Returns the length of a string in characters (multibyte-safe).
$string2 = "Hello, 世界!";
$length = mb_strlen($string2);
echo $length; //output: 9

//mb_substr(): Returns a part of a string (multibyte-safe)
$string3 = "Hello, 世界!";
$substring = mb_substr($string3, 7,2);
echo $substring;

//mb_strpos(): Searches for a substring within a string and returns the position of the first occurrence (multibyte-safe).
$string4 = "Hello, 世界!";
$position = mb_strpos($string4 , '世');
echo $position; //output: 7

//ord(): Returns the ASCII value of the first character of a string.
$string5 = "Hello, 世界!";
$asciiValue = ord($string5[0]);//output: 72
$asciiValue = ord($string5[1]);//output: 101
$asciiValue = ord($string5[2]);//output: 108
echo $asciiValue;

//mb_strtolower(): Converts a string to lowercase (multibyte-safe)
$string6 = "Hello, World";
$lowercaseString = mb_strtolower($string6);
echo $lowercaseString; // Output: hello, world!

//mb_strtoupper(): Converts a string to uppercase (multibyte-safe)
$string7 = "Hello, World!";
$uppercaseString = mb_strtoupper($string7);
echo $uppercaseString; // Output: HELLO, WORLD!


//mb_convert_case(): Converts the case of a string (multibyte-safe).
$string8 = "hElLo, wOrLd!";
$convertedString2 = mb_convert_case($string8, MB_CASE_TITLE);
echo $convertedString2; // Output: HELLO, WORLD!

//mb_strrev(): Reverses a string (multibyte-safe)
$string9 = "Hello, 世界!";
$reversedString = mb_strrev($string9);
echo $reversedString;

//mb_detect_encoding(): Detects the character encoding of a string
$string10 = "Hello, 世界!";
$encoding = mb_detect_encoding($string10);
echo $encoding; // Output: UTF-8