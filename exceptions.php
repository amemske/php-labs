<?php

function inverse($number)
{
    if (!$number) { // ($numberX == 0 || $numberX == false || $numberX == null)
        throw new Exception("Division by Zero");
    }
    return 1 / $number;
}

echo inverse(7);


try {


    echo inverse(0);
    echo inverse(5);// this code dos not run, due to the execption thrown ...the code exits out of the try catch and moves to another ty catch in any, but finally will run as it means regardless
} catch (Exception $anError) {
    echo 'Caught exception' .  $anError->getMessage(), '';
} finally {
    echo 'first finally';
}

echo 'Hello World';