<?php
$students = array("Antony", "Erick", "Moses");


foreach ($students as $student) {

    echo  $student . "<br>";
};

$grades = array("Antony" => "95", "Erick" => "75", "Moses" => "43");
foreach ($grades as $stnt => $grade) {
    echo "$stnt = $grade<br>"; //if you remove the quotes, the key is not printed
}