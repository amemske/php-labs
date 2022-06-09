<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="madlibs.php" method="get">
        value1: <input type="text" name="value1" />
        value2: <input type="text" name="value2" />
        value3: <input type="text" name="value3" />
        <input type="submit" />


    </form>

    <?php
    if (isset($_GET["value1"]) && isset($_GET["value2"])  && isset($_GET["value3"])) {

        $value1 = $_GET["value1"];
        $value2 = $_GET["value2"];
        $value3 = $_GET["value3"];

        echo "Rose are $value1<br>";
        echo "Violets are $value2 <br>";
        echo "I love $value3<br>";
    } else {
        $_GET["value1"] = "";
        $_GET["value2"] = "";
        $_GET["value3"] = "";
    }
    ?>

</body>

</html>