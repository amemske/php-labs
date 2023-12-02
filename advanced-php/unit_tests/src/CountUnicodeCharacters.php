<?php

namespace App;

/*
 * Given a string that may contain Unicode characters, write a function to count the number of distinct Unicode characters in the string.
 */

class CountUnicodeCharacters
{
    function countUnicodeCharactersFunc($str): int
    {
        $count = 0;
        $seen = [];

        // Iterate over each character in the string
        for ($i = 0; $i < mb_strlen($str); $i++) {
            $char = mb_substr($str, $i, 1);//check each character

            // Check if the character has already been seen
            if (!isset($seen[$char])) {
                // Increment the count and mark the character as seen
                $count++;
                $seen[$char] = true;
            }
        }

        return $count;
    }



}

// Example usage
$string = "Hello, 世界!";

$result = new countUnicodeCharacters();

echo $result->countUnicodeCharactersFunc($string);
 // Output: 9
