<?php

/*
 * A closure is a type of anonymous function that allows you to define a block of code that can be assigned to a variable,
 * passed as a parameter to a function,
 * or returned as a value from a function.
 *
 * Closures can also be used as callback functions for array functions such as array_map() or array_filter(),
 * or as event handlers for PHP's built-in event system.
 */

$greeting = function($name) {
    echo "Hello, $name!";
};

$greeting('John'); // Outputs "Hello, John!"