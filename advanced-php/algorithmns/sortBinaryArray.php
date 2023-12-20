<?php

// Given a binary array, in-place sort it in linear time and constant space. The output should contain all zeroes, followed by all ones.

// Input : [1, 0, 1, 0, 1, 0, 0, 1]
// Output: [0, 0, 0, 0, 1, 1, 1, 1]

// Input : [1, 1]
// Output: [1, 1]

class Solution {

    public function sortArray(&$nums){

        $start = 0;
        $end = count($nums) - 1;
        $current = 0;
        
        // Iterate through the array
        while ($current <= $end) {
            if ($nums[$current] == 0) {
                // Swap with the element at the start pointer
                list($nums[$current], $nums[$start]) = [$nums[$start], $nums[$current]];
                // Move the start pointer forward
                $start++;
                // Move the current pointer forward
                $current++;
            } elseif ($nums[$current] == 1) {
                // Move the current pointer forward
                $current++;
            } else {
                // Swap with the element at the end pointer
                list($nums[$current], $nums[$end]) = [$nums[$end], $nums[$current]];
                // Move the end pointer backward
                $end--;
            }
        } 
    }
}

// Example usage:
$solution = new Solution();
$nums1 = [2, 0, 1, 0, 1, 0, 0, 1];
$solution->sortArray($nums1);
print_r($nums1);  // Output: [0, 0, 0, 0, 1, 1, 1, 1]

$nums2 = [2, 1];
$solution->sortArray($nums2);
print_r($nums2);  // Output: [1, 1]
