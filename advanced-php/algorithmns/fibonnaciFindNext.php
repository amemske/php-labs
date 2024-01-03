<?php

// Write a function 'fib(n)' that takes in a number as an argument.
// The function should return the  n-th number of the Fibonacci sequence.

// The 1st and 2nd number of the sequence is 1.
// To generate the next number of the sequence, we sum the previous two.

function fib($n){
    $fibArray = array(1,1);

    //handle base cases
    if($n == 1 || $n  == 2){
        return 1;
    }

    //use a for loop to generate the fibonacci sequence
    for($i = 2; $i<$n; $i++){

        $fibArray[$i] = $fibArray[$i-1] + $fibArray[$i-2];


    }
    return $fibArray[$n - 1]; // the last item in the array is the fibArray[$n] after the loop exits, to get correct index we need to  -1 since arrays indexes start at 0

}

$result = fib(6);
echo $result;