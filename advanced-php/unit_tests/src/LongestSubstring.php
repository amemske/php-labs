<?php

namespace App;

class LongestSubstring
{
    function lengthOfLongestSubstring($s) {
        $maxLength = 0;//store longest substring
        $start = 0;//starting index of the current substring
        $seen = [];//array to store unique values from the string and their index

        //loop through the  string and return the maxlength
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            //check if character value exists && character value must be larger than the start value
            if (isset($seen[$char]) && $seen[$char] >= $start) {
                $start = $seen[$char] + 1; //update the start
            }
            $seen[$char] = $i;//update the seen array with each index encountered
            $maxLength = max($maxLength, $i - $start + 1); //always return the largest number
        }

        return $maxLength;
    }


}

// Example usage
$LongestSubstring = new longestSubstring();

$string = "abcabcbb";
echo $LongestSubstring ->lengthOfLongestSubstring($string);
// Output: 3 (The longest substring without repeating characters is "abc")