<?php 

//Generators are functions that allow you to iterate over a set of values without having to generate the entire set upfront
// and store it in memory.Instead, the generator function yields one value at a time, and then pauses until the next value is requested.

// One common use case for generators in PHP is to process large files line-by-line. For example, you might have a log file that contains
// millions of lines of data, and you need to perform some operation on each line. Rather than reading the entire file into memory
// and processing it all at once, you can use a generator to read the file line-by-line and process each line as it is generated.

// The yield keyword in PHP is similar to return in that it allows you to send a value back to the calling code. However, yield is used in
// the context of generator functions, which are functions that use yield to generate a sequence of values on-the-fly.
// The yield keyword is used to pause the execution of the generator function and return a value to the caller. When the generator function
// is invoked again, it resumes execution from where it left off and continues generating the sequence of values.


//simple example of a generator 

function myGenerator() {
    yield 1;
    yield 2;
    yield 3;
}

foreach (myGenerator() as $value) {
    echo $value . "\n"; // 1, 2, 3
}


// You can also use a generator to process a large file line by line, without having to read the entire file into memory. Here's an example:

function outputFileLineByLine($filename) {
    $file = fopen($filename, 'r'); //open a file in a specified mode, which can be "r" for read-only, "w" for write-only (overwriting the file), "a" for write-only (appending to the file), "x" for write-only (creating a new file and writing to it),
    while($line = fgets($file)) { // reads a single line and store it in the $line
        yield trim($line);
    }
    fclose($file);
}

foreach (outputFileLineByLine('myfile.txt') as $line) {
    echo processLine($line) . "\n"; 
}

//use a generator to process a large CSV file

function readCsv($filename) {
    $file = fopen($filename, 'r');
    while ($row = fgetcsv($file)) {
        yield $row;
    }
    fclose($file);
}

foreach (readCsv('large_file.csv') as $row) {
    echo processLine($row) . "\n";
}