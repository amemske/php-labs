<?php
$students = array("Antony", "Erick", "Moses");


foreach ($students as $student) {

    echo  $student . "<br>";
};

$grades = array("Antony" => "95", "Erick" => "75", "Moses" => "43");
foreach ($grades as $student => $grade) {
    echo "$student = $grade<br>"; // aletenatively  echo $student  . " = ". $grade ." <br>";
}

$fruits = array("apples", "bananas", "oranges", "mangos");

foreach ($fruits  as $fruit) {

    echo $fruit . "<br>";

}