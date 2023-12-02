<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calc-simple.php" method="get">
        value 1: <input type="number" name="num1" />
        value 2: <input type="number" name="num2" />
        <input type="submit" />
    </form>
    <br>
    <?php
    $number1 = $_GET["num1"];
    $number2 = $_GET["num2"];
    echo $number1 + $number2;


    ?>
</body>

</html>