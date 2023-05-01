<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="checkbox.php" method="post">

<<<<<<< HEAD
Apples <input type="checkbox" name="fruits[]" value="apples"><br>
Mangoes <input type="checkbox" name="fruits[]" value="mangoes"><br>
Pears <input type="checkbox" name="fruits[]" value="pears"><br>
<input type="submit">

</form>
=======
    <input type="checkbox" name="fruits[]" value="apples"> Apples <br>
    <input type="checkbox" name="fruits[]" value="mangoes"> Mangoes <br>
    <input type="checkbox" name="fruits[]" value="pears">   Pears <br>
    <input type="submit">

    </form>
    <?php
    if(!empty($_POST['fruits'])) { //$_POST['fruits'] is an array, so loop over the array
        foreach($_POST['fruits'] as $check) {
                echo $check; //echoes the value set in the HTML form for each checked checkbox.
                             //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                             //in your case, it would echo whatever $row['Report ID'] is equivalent to.
        }
    } else {
        echo "you didn't choose";
    }
>>>>>>> d3b153355a14ca689a9033afcd1f3392f7f94bd7

<?php

var_dump($_POST["fruits"]);// an array of fruits is creates when you select something

if (isset($_POST["fruits"])) { //check if array of fruits is created
echo "You chose the following fruits:<br>";
foreach ($_POST['fruits'] as $fruit) {
    echo "- " . htmlspecialchars($fruit) . "<br>";
}
} else {
echo "You didn't choose any fruits.";
}
?>



</body>

</html>