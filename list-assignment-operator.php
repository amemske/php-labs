<?php
//the list assignment syntax works by assigning the values of an array to a corresponding list of variables.

function returnTwoValues() {
    return [1, 2];
}

echo [$a, $b] = returnTwoValues(); // Output: a = 1, b = 2


//since the function returns an array with two elements,
// but there is only one variable on the left-hand side of the assignment:
[$c] = returnTwoValues();// Warning: Undefined offset: 1


// This will raise a fatal error, since the function returns an array with only one element,
// but there are two variables on the left-hand side of the assignment:
[$d, $e] = [1]; // Fatal error: Uncaught Error: [] operator not supported for strings