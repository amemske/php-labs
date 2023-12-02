<?php

/*
 * A while loop is used when you want to repeat a block of code as long as a certain condition is true.
 *  It continues looping as long as the condition remains true, and you have more flexibility in controlling the loop condition.
 */

$i = 1;

while ($i <=5) { //condition
    echo $i .  ' ';
    $i++; //increment
}

//output 1, 2, 3, 4, 5

/*
 * A for loop is typically used when you know the exact number of iterations or when you need more control over
 * the loop mechanism. It consists of three parts: initialization, condition, and increment.
 */

for ($index = 1; $index <= 5; $index++) {
    echo $index . ' ';
}


//A while loop inside a  for loop

$array1 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$array2 = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 30],
    ['name' => 'Mark', 'age' => 35]
];

for ($i = 1; $i <= 3; $i++) {
    echo "Iterations $i: ";

    $j = 1; // starting

    while ($j <= 5) {
        echo $j;

        // Extract values from $array1 using list assignment
        [$val1, $val2, $val3] = $array1[$i - 1];
        echo " - Multidimensional array: $val1, $val2, $val3";

        // Extract values from $array2 using list assignment
        ['name' => $name, 'age' => $age] = $array2[$i - 1];
        echo " - Associative array: Name: $name, Age: $age";

        $j += $i; // increment
    }

    echo '\n';
}