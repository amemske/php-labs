<?php

/*
 * assigning a variable by reference means that the new variable is just another name for the same data in memory as the original variable.
 * Any changes made to one variable will be reflected in the other variable, because they are both pointing to the same data in memory.
 * */


$amount = 500;
$referenceAmount = &$amount;

$amount = 700;

echo $referenceAmount;