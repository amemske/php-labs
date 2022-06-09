<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sayHi($name, $age)
    {
        echo "Hello $name  you are $age<br>";
    };
    function cube($num1)
    {
        return $num1 * $num1 * $num1;
    }

    sayHi("Antony", 40);
    sayHi("Annabela", 10);
    sayHi("Paulina", 9);

    $cubeResult = cube(5);
    echo $cubeResult
    ?>
</body>

</html>