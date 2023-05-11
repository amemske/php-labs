<?php
// An index is a database structure that allows for faster searching and sorting of data in a table.
//  When you create an index on a column, the database creates an internal data structure that maps
//   the values in the column to the rows that contain those values.
//  This allows the database to quickly find all rows that match a given value or range of values in the indexed column.

$table->dateTime('start_date')->index(); 


/* Common commands

migrate fresh - drops the tables and runs the migrations again
migrate reset -  rolls back migrations without dropping any tables, which can be useful if you want
 to undo changes made to the database during development or testin
 
 php artisan r:l - rl is route list, get the route list which shows the controllers and methods to use
 */