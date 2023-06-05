<?php

namespace App;

class Palindrome
{
    function isPalindrome($input): bool
    {
        // Convert input to string if it's a number
        if (is_numeric($input)) {
            $input = (string)$input;
        }

        // Remove non-alphanumeric characters and convert to lowercase
        $input = preg_replace("/[^A-Za-z0-9]/", '', strtolower($input));

        // Reverse the input string
        $reversed = strrev($input);

        // Compare the original and reversed strings
        if ($input === $reversed) {
            return true; // Palindrome
        } else {
            return false; // Not a palindrome
        }
    }


}

//// Example usage
//$input1 = "madam";
//$input2 = "12321";
//$input3 = "Hello";
//
//var_dump(isPalindrome($input1)); // Output: bool(true)
//var_dump(isPalindrome($input2)); // Output: bool(true)
//var_dump(isPalindrome($input3)); // Output: bool(false)

