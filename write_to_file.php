<?php

//Using fwrite()

$data = "Hello, world!";
$file = fopen("myfile.txt", "w");
fwrite($file, $data);
fclose($file);

//Using file_put_contents()

$data = "Hello, world!";
file_put_contents("myfile.txt", $data);

//Using fputcsv() that allows you to write an array of data to a CSV file

$data = array(
    array("John", "jdoe@gmail.com"),
    array("Susan", "sue@gmail.com"),
);
$file = fopen("myfile.csv", "w");
foreach ($data as $row) {
    fputcsv($file,$row);
}
fclose($file);



