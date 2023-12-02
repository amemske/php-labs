<?php

// The array_column() function is used to extract all the values associated with the 'qty' key from the $items array. 
//It will create a new array called $itemsQty, containing the quantities of each item.

$items = [
    'item_1' => ['id' => 1, 'name' => 'Pink Shirt', 'qty' => 2],
    'item_2' => ['id' => 2, 'name' => 'Blue Shirt', 'qty' => 3],
];

$itemsQty = array_column($items, 'qty');
echo array_sum($itemsQty); // output 5

print_r($itemsQty);
/*
(
    [0] => 2
    [1] => 3
)
*/