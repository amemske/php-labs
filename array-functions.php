<?php
$fruits = ["apples", "oranges", "pineapples"];

//Get the length of array
echo count($fruits);

echo "<br>";

//check if exists
var_dump(in_array("apples", $fruits));

echo "<br>";

//Add to an  array
$cars[] = "mazda";
array_push($cars, "nissan", "toyota");
//array_unshift($cars, "vw");

print_r($cars) ;

//Remove from an array
//array_pop($cars);
//array_shift($cars);
//unset($cars[3]);


echo "<br>";
//create a chunked array

$books = ["Jack and the bean stalk", "Gullivers travellers", "Simpsones"];

$chuncked_array = array_chunk($books, 1);

echo "<pre>";
print_r($chuncked_array);
echo "</pre>";

//print_r($fruits);


//Merge Arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
echo "<br> array_merge-----";
echo "<pre>";
print_r($arr3);
echo "</pre>";

echo "<pre>";
print_r($arr4);
echo "</pre>";
echo "<br> array_merge-----";

//combine arrays
$a = ["Red", "Green", "Yellow"];
$b = ["Mango", "Melon", "Banana"];
$c = array_combine($a, $b);

echo "<br> array_combine-----";
echo "<pre>";
print_r($c);
echo "</pre>";
echo "<br> array_combine-----";


//get the keys
$keys = array_keys($c);
echo "<br> array_keys-----";
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<br> array_keys-----";

//flipped array
$flipped_array = array_flip($c);
echo "<br> array_flip-----";
echo "<pre>";
print_r($flipped_array);
echo "</pre>";
echo "<br> array_flip-----";

//range
$numbers = range(1, 15);

//Map
$newNumbers =  array_map(function ($number) {
    return "Number $number";
}, $numbers);

echo "<br> array_flip-----";
echo "<pre>";
print_r($newNumbers);
echo "</pre>";
echo "<br> array_flip-----";

//filtered array
$lessThanTen = array_filter($numbers, fn ($number) => $number <= 10);
echo "<br> array_filter-----";
echo "<pre>";
print_r($lessThanTen);
echo "</pre>";
echo "<br> array_filter----- <br>";

//reduce 
$sum = array_reduce($numbers, fn ($carry, $number) =>  $carry + $number);
echo "<br> array_reduce----- <br>";
var_dump($sum);
echo $sum;
echo "<br> array_reduce-----";