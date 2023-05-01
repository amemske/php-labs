<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="fruits">Choose a fruit:</label>
    <select name="fruits[]" id="fruits" multiple>
        <option value="apples">Apples</option>
        <option value="mangoes">Mangoes</option>
        <option value="pears">Pears</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php
if (isset($_POST["fruits"])) {
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