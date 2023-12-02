<?php

namespace App;

/*
 * Given a string, find the length of the longest substring without repeating characters.
 */
class LongestSubstring
{
    function lengthOfLongestSubstring($s) {
        $maxLength = 0;//store longest substring
        $start = 0;//starting index of the current substring
        $seen = [];//array to store unique values from the string and their index

        //loop through the  string and return the maxlength
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i]; // the actual character at index $s[$i]
//checks if the current character $char is already seen (exists in the $seen array)
            //$seen[$char] is and index similar to
            /*
             * array(4) {
                  'H' => int(0)
                  'e' => int(1)
                  'l' => int(2)
                  'o' => int(4)
                }
            so $seen[$char] at first is 0
             */
// if(isset(0) && 0 > = 0)
            if (isset($seen[$char]) && $seen[$char] >= $start) {
                $start = $seen[$char] + 1; //increment the start by 1
            } else {

                $seen[$char] = $i;// add the char to the array with index of i
                //he max() function in PHP is used to find the maximum value among a list of arguments or an array.
                // It returns the highest value from the given inputs.
                $maxLength = max($maxLength, $i - $start + 1); //0 - 0 + 1 = 1 so in the next iteration we shall be comparing against 1
            }
        }

        return $maxLength;
    }


}

// Example usage
$LongestSubstring = new longestSubstring();

$string = "abcabcbb";
echo $LongestSubstring ->lengthOfLongestSubstring($string);
// Output: 3 (The longest substring without repeating characters is "abc")