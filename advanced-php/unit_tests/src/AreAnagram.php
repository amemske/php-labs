<?php

namespace App;

class AreAnagram {

    public function check_equal_strings($str1, $str2): bool
    {
        // Removing spaces and converting to lowercase
        $normalized_str1 = strtolower(str_replace(' ', '', $str1));
        $normalized_str2 = strtolower(str_replace(' ', '', $str2));

        // Check if input strings are valid Unicode
        if (!mb_check_encoding($normalized_str1, 'UTF-8') || !mb_check_encoding($normalized_str2, 'UTF-8')) {
            // Invalid Unicode input, return false
            return false;
        }

        // Convert both strings to UTF-8 encoding
        $str1_utf8 = mb_convert_encoding($normalized_str1, 'UTF-8');
        $str2_utf8 = mb_convert_encoding($normalized_str2, 'UTF-8');

        // Convert the strings to array and
        // counts the occurrences of each unique value in the array.
        $freq1 = array_count_values(mb_str_split($str1_utf8));
        $freq2 = array_count_values(mb_str_split($str2_utf8));


        //var_dump($freq1);
       // var_dump($freq2);

        // check the difference between the two arrays, if they are the same empty will be true otherwise false
        return empty(array_diff_assoc($freq1, $freq2));

    }

}

$newCheck = new AreAnagram();

 echo $newCheck->check_equal_strings('bare', 'bear') ? 'true' : 'false';