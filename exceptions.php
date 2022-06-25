<?php

function inverse($numberX)
{
    if (!$numberX) {
        throw new Exception("Division by Zero");
    }
    return 1 / $numberX;
}




try {


    echo inverse(0);
    echo inverse(5);
} catch (Exception $anError) {
    echo 'Caught exception' .  $anError->getMessage(), '';
} finally {
    echo 'first finally';
}

echo 'Hello World';