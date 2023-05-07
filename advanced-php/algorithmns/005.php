<?php

// Write a function that takes a string as input and returns the most common character in the string. 
// If there are multiple characters with the same highest frequency, return the one that appears first in the string.
// For example, given the input string "hello world", the function should return the character "l", 
// since it appears three times in the string, which is more than any other character.
// Note that the input string may contain spaces and special characters, and the function should treat 
// upper- and lower-case characters as distinct.

// Here's an example input and output:

// Input: "The quick brown fox jumps over the lazy dog."
// Output: "o"



function mostCommonChar(string $inputString): array
{
    // Remove spaces and special characters from the input string
    $inputString = preg_replace("/[^a-zA-Z]/", "", $inputString);

    // Count the frequency of each character in the input string
    $charCount = count_chars($inputString, 1);

    // Find the character with the highest frequency
    $mostCommonChar = chr(max(array_keys($charCount, max($charCount))));
    
    // Find the index of the first instance of the most common character
    $firstInstance = strpos($inputString, $mostCommonChar);

    // Return an array containing the most common character and its first instance
    return array($mostCommonChar, $firstInstance);
}
$result = mostCommonChar("The quick brown fox jumps over the lazy dog.");

// Print the result


echo "Most common character: " . $result[0] . "\n";
echo "First instance: " . $result[1] . "\n";