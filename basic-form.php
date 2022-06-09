<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo ('<h1>Hello World</h1>'); ?>
    <?php echo ('<hr>'); ?>
    <?php echo ('<h4>my site</h4>'); ?>

    <?php
    $characterName = "Thomas";
    $characterAge = 100;

    echo "There once was a man name $characterName, he was $characterAge yrs old<br>";
    echo "He really liked the name $characterName <br>";
    echo "but didn't like being $characterAge <br>";

    $phrase = "Bingwa Homes";
    echo $phrase[0];
    $phrase[0] = "S";
    echo "<br>";
    echo $phrase;
    echo "<br>";
    echo str_replace("Bingwa", "Kula", $phrase);
    echo "<br>";
    echo $phrase;
    echo "<br>";
    echo substr($phrase, 3, 5)

    ?>
    <form action="site.php" method="get">
        name: <input type="text" name="myName" />
        <input type="submit" />
    </form>
    <br>
    <?php
    if (isset($_GET['myName'])) {

        echo $_GET['myName'];
    } else {

        $name = " ";
    }
    ?>

</body>

</html>