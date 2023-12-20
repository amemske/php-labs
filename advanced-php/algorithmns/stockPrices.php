<?php

// Consider a scenario where you have been given an array of integers representing the daily stock prices of a company for a given period.
//  You are also provided with an associative array of stock prices for the same period. You are required to implement a program that performs the following tasks:

$stockPricesArray = [50, 50, 45, 70, 80];
$targetPrice = 60;
$stockPricesAssocArray = [
    "day1" => 500,
    "day2" => 700,
    "day3" => 600,
    "day4" => 1000
];

// Calculate the average stock price:
// Write a function, calculateAveragePrice, that takes the array of stock prices as input and returns the average price of the stocks.

function calculateAveragePrice($stockPrices){
    if(empty($stockPrices)){
        return 0;
    }
    $total = array_sum($stockPrices);
    $average = $total / count($stockPrices);
    return $average;

}

// Find the maximum stock price:
// Write a function, findMaximumPrice, that takes the array of stock prices as input and returns the maximum price among all the stocks. 

function findMaximumPrice($stockPrices) {
    if (empty($stockPrices)) {
        return null; // Return null if the array is empty
    }
    return max($stockPrices);
}

// Determine the occurrence count of a specific price:
// Write a function, countOccurrences, that takes the array of stock prices and a target price as input and returns the number of times the target price occurs in the array. 

function countOccurrences($stockPrices, $targetPrice){
    //since array_count_values returns an  associative array of the array counts, you are accessing the array to find a specific value with the key [$targetPrice] e.g. $array_name[$targetPrice]
    //if it exists return it's value otherwise return 0
    return array_count_values($stockPrices)[$targetPrice] ?? 0 ;
}

// Compute the cumulative sum of stock prices:
// Write a function, computeCumulativeSum, that takes the associative array of stock prices as input and returns a new associative array containing the cumulative sum of prices at each position.

function getCumulativeSum($stockPrices) {
    $cumulativeSum = [];
    $runningSum = 0;
    foreach ($stockPrices as $key => $price) {
        $runningSum += $price;
        $cumulativeSum[$key] = $runningSum;
    }
    return $cumulativeSum;
}


$averagePrice = calculateAveragePrice($stockPricesArray);
$maxPrice = findMaximumPrice($stockPricesArray);
$targetPrice = 60;
$occurrences = countOccurrences($stockPricesArray, $targetPrice);
$cumulativeSum = computeCumulativeSum($stockPricesAssocArray);

echo "Average Price: $averagePrice\n";
echo "Maximum Price: $maxPrice\n";
echo "Occurrences of $targetPrice: $occurrences\n";
echo "Cumulative Sum of Stock Prices:\n";
print_r($cumulativeSum);