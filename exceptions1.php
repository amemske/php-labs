<?php
//where possible use types e.g. float, int to signal the expected value

function add(int $one, int $two){
    return $one + $two;
    
}

echo add(1,2);


echo '</br>';

//option2

function subtract($x, $y){
    if(! is_float($x) || ! is_float($y)){
       // throw new Exception('Please provide a float');
       throw new InvalidArgumentException('Please provide a float');
    }

    return $x - $y;
}
try{
    echo subtract(2, []);
}
catch (Exception $e) {
    echo 'Oh well';
}
