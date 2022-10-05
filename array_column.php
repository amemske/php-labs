<?php

$items = [
    'item_1' => ['id' => 1, 'name' => 'Pink Shirt', 'qty' => 2],
    'item_2' => ['id' => 2, 'name' => 'Blue Shirt', 'qty' => 3],
];

$itemsQty = array_column($items, 'qty');
echo array_sum($itemsQty); // output 5