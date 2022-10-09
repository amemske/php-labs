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
echo "chunked array start";
echo "<pre>";
print_r($chuncked_array);
echo "</pre>";
echo "chunked array end";
//print_r($fruits);


//Merge Arrays
$arr1 = ["a", "b", "c"];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
echo "<br>" . "arr3--start";
echo "<pre>";
print_r($arr3); //print_r also shows the array position
echo "</pre>";
echo "arr3--end";

echo "<br>" . "arr4--start";
echo "<pre>";
print_r($arr4);
echo "</pre>";
echo "<br>" . "arr4--end";


//combine arrays
echo "<br>" . "combine arrays--start";
$a = ["Red", "Green", "Yellow"];
$b = ["Mango", "Melon", "Banana"];
$c = array_combine($a, $b);
echo "<pre>";
print_r($c);
echo "</pre>";
echo "<br>" . "combine arrays--end";

//get the keys
echo "<br>" . "array keys-------------start";
$keys = array_keys($c);
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<br>" . "array keys----------------end";

//flipped array
echo "<br>" . "flipped array----------------start";
$flipped_array = array_flip($c);
echo "<pre>";
print_r($flipped_array);
echo "</pre>";
echo "<br>" . "flipped array----------------end";

//range
$numbers = range(1, 15);

//Map
echo "<br>" . "map array----------------start";
$newNumbers =  array_map(function ($number) {
    return "Number $number";
}, $numbers);
echo "<pre>";
print_r($newNumbers);
echo "</pre>";
echo "<br>" . "map array----------------end";

//filtered array
echo "<br>" . "filtered array----------------start";
$lessThanTen = array_filter($numbers, fn ($number) => $number <= 10);
echo "<pre>";
print_r($lessThanTen);
echo "</pre>";
echo "<br>" . "filtered array----------------end";

//reduce 
echo "<br>" . "array reduce----------------start";
$sum = array_reduce($numbers, fn ($carry, $number) =>  $carry + $number);
var_dump($sum);
echo "<br>" . "array reduce----------------end";