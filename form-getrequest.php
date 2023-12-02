<?php
var_dump($_GET); //array(2) { ["test"]=> string(4) "exam" ["testTwo"]=> string(5) "exam2" }
if (isset($_GET['test'])) {
    echo  "Hello" . $_GET['test']; //exam
} 

?>

<form method='post' action='./form-postrequest.php'>
    <input type ='text' name= 'test'>
    <input type = 'submit'>
</form>