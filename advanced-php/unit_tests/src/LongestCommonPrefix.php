<?php

namespace App;

class LongestCommonPrefixClass
/*
 * Given an array of strings, find and return the longest common prefix among them. The longest common prefix is the
 *  longest string that is a prefix of all strings in the array.
 */
{
    function longestCommonPrefix(Array $array1) {
        if (empty($array1)) {
            return '';
        }

        $prefix = $array1[0]; // Start with the first string as the initial prefix

        for ($i = 1; $i < count($array1); $i++) {
           // $array1[$i] = second string $prefix = first string
            while (!str_starts_with($array1[$i], $prefix)) { //($array1[$i] means start at the second string...so compare the second and the first strings
                $prefix = substr($prefix, 0, -1); // Remove the last character from the prefix
            }
        }

        return $prefix;
    }

}

//Explanation *******************
/*
 * Initially:

$prefix: "flower"
First iteration:



$passedArray[$i]: "flow"
$prefix: "flower"

In the case of "flower" and "flow", !str_starts_with("flow", "flower") will evaluate to true.
This is because the string "flow" does not start with the prefix "flower".

Since "flower" is not found at the beginning of "flow", the while loop is executed. The process continues as follows:


Iteration 1:
Prefix: "flower"
String: "flow"
Updated Prefix: "flowe"

Iteration 2:
Prefix: "flowe"
String: "flight"
Updated Prefix: "flow"

Iteration 3:
Prefix: "flow"
String: "flight"
Updated Prefix: "flo"

Iteration 4:
Prefix: "flo"
String: "flight"
Updated Prefix: "fl"

Final Result:
Prefix: "fl"

 */


// Example usage
$array1 = ["flower", "flow", "flight"];

$result1 =  new LongestCommonPrefixClass();

echo $result1->longestCommonPrefix($array1); // Output: "fl"
