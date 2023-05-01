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

Apples <input type="checkbox" name="fruits[]" value="apples"><br>
Mangoes <input type="checkbox" name="fruits[]" value="mangoes"><br>
Pears <input type="checkbox" name="fruits[]" value="pears"><br>
<input type="submit">

</form>

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