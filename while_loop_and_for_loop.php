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

/*
 * when $i is 1, $j is incremented by 1 in each iteration of the inner loop, resulting in the sequence 1 2 3 4 5 being printed.
 * When $i is 2, $j is incremented by 2, resulting in the sequence 1 3 5. And when $i is 3, $j is incremented by 3,
 * resulting in the sequence 1 4. Thus, $j += $i; is a way to control the step size or increment of the inner loop's
 * counter variable based on the outer loop's value.
 *
 */

for ($i = 1; $i<=3;  $i++){
    echo "Iterations $i: ";

    $j = 1; //starting
    while ($j<=5) {
        echo $j;
        $j += $i; // increment
    }
    echo '\n';

}

/*For example, when $i is 1, $j is incremented by 1 in each iteration of the inner loop, resulting in
the sequence 1 2 3 4 5 being printed. When $i is 2, $j is incremented by 2, resulting in the sequence 1 3 5.
And when $i is 3, $j is incremented by 3, resulting in the sequence 1 4.
Thus, $j += $i; is a way to control the step size or increment of the inner loop's counter variable based on
the outer loop's value.
 *
 *
 *
 *
 * output is
 * Iteration 1: 1 2 3 4 5
 * Iteration 2: 1 3 5
 * Iteration 3: 1 4
 */