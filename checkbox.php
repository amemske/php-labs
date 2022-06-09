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

        Apples <input type="checkbox" name="fruits[]" value="apples">
        Mangoes <input type="checkbox" name="fruits[]" value="mangoes">
        Pears <input type="checkbox" name="fruits[]" value="pears">
        <input type="submit">

    </form>
    <?php
    if (isset($_POST["fruits"])) {
        echo "you chose a fruit";
        echo $_POST['fruits'][0];
        //$fruits = isset($_POST["fruits"]);
        //echo  $fruits[0] ?? 'default';;
    } else {
        echo "you didn't choose";
    }


    //


    ?>



</body>

</html>