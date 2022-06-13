<?php
$fruits = ["apples", "oranges", "pineapples"];

//Get the length of array
echo count($fruits);

echo "<br>";

//check if exists
var_dump(in_array("apples", $fruits));

echo "<br>";

//Add to an  array
$fruits[] = "Pears";
array_push($fruits, "Mangoes", "Strawberries");
array_unshift($fruits, "blueberries");

//Remove from an array
array_pop($fruits);
array_shift($fruits);
//unset($fruits[3]);


echo "<br>";
//create a chunked array


$chuncked_array = array_chunk($fruits, 3);

echo "<pre>";
print_r($chuncked_array);
echo "</pre>";

//print_r($fruits);


//Merge Arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
echo "<pre>";
print_r($arr3);
echo "</pre>";

echo "<pre>";
print_r($arr4);
echo "</pre>";

//combine arrays
$a = ["Red", "Green", "Yellow"];
$b = ["Mango", "Melon", "Banana"];
$c = array_combine($a, $b);
echo "<pre>";
print_r($c);
echo "</pre>";

//get the keys
$keys = array_keys($c);
echo "<pre>";
print_r($c);
echo "</pre>";

//flipped array
$flipped_array = array_flip($c);
echo "<pre>";
print_r($flipped_array);
echo "</pre>";

//range
$numbers = range(1, 15);

//Map
$newNumbers =  array_map(function ($number) {
    return "Number $number";
}, $numbers);
echo "<pre>";
print_r($newNumbers);
echo "</pre>";

//filtered array
$lessThanTen = array_filter($numbers, fn ($number) => $number <= 10);

echo "<pre>";
print_r($lessThanTen);
echo "</pre>";
//reduce 
$sum = array_reduce($numbers, fn ($carry, $number) =>  $carry + $number);
var_dump($sum);