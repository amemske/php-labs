<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="if-statements.php" method="post">

        Num1 <input type="text" name="num1" /><br>
        Num2 <input type="text" name="num2" /><br>
        OP<input type="text" name="op" /><br>
        <input type="submit" />
    </form>
    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["op"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
        if ($op == "+") {
            echo $num1 + $num2;
        } elseif (($op == '-')) {
            echo $num1 - $num2;
        } elseif (($op == '/')) {
            echo $num1 / $num2;
        } else {
            echo 'wrong operator';
        }
    }


    ?>
</body>

</html>