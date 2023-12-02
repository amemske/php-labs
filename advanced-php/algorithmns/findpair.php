Describe an algorithm in JavaScript that takes an unsorted array of integers as input and a target sum.
The algorithm should output an array containing pairs of elements from the input array that add up to the target sum.
The order of the elements in each pair is flexible, and the algorithm can output any valid pair that meets the criteria.
If no pair with the given sum exists, the algorithm should return an empty array.

<?php


function findPairWithSum ($num, $target) {
    $pairwithSum = [];

    for($i=0; $i<count($num); $i++){
        for($j = $i + 1; $j<count($num); $j++){
            $sum = $num[$i] + $num[$j];
            if($sum === $target) {
                $pairwithSum[] = [$num[$i], $num[$j]];
            }

        }
    }
    return $pairwithSum;

}


$num1 = [1, 8, 2, 7, 5, 9];
$target1 = 10;
print_r(findPairWithSum ($num1, $target1));
