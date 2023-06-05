<?php

namespace App;

class LongestCommonPrefixClass
{
    function longestCommonPrefix($strings) {
        if (empty($strings)) {
            return '';
        }

        $prefix = $strings[0]; // Start with the first string as the initial prefix

        for ($i = 1; $i < count($strings); $i++) {
            while (!str_starts_with($strings[$i], $prefix)) {
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
