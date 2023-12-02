<?php

namespace App;

/*
 * the modified string as the character followed by the count of consecutive occurrences; otherwise,
 * the character should be included as is in the modified string.
 */

class RunLength
{
    function mergeDuplicates ($original_str): void
    {
        // Initialize variables
        $final_string = "";
        $original_string_length = strlen($original_str);
        $duplicate_count = 1;

        // Iterate over each character in the original string
        for ($i = 0; $i < $original_string_length; $i++) {
            // Check if the current character is the same as the next character
            //$i < $original_string_length - 1 prevents going over the total length of string  since we are adding 1, we have to minus 1
            if ($i < $original_string_length - 1 && $original_str[$i] === $original_str[$i + 1]) {
                // If the characters are the same, increment the count
                $duplicate_count++;
            } else {
                // If the characters are different or we have reached the end of the string,
                // append the character and its count to the final string
                $final_string .= $original_str[$i] . ($duplicate_count > 1 ? $duplicate_count : "");
                $duplicate_count = 1; // Reset the duplicate count for the next character
            }
        }

        // Output the final string
        echo $final_string;

    }
}