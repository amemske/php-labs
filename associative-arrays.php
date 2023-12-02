<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="associative-arrays.php" method="post">
        <input type="text" name="students">

        <input type="submit" name="checkGrade">
    </form>

    <?php
    $grades = array("Antony" => "A+", "Eric" => "B+", "Cindy" => "C+");
   // echo $grades["Antony"];
   // echo count($grades);
   // $grades["Eric"] = "C-";
   // echo $grades["Eric"];

    //echo $grades["Antony"];
    //echo count($grades);
   // $grades["Eric"] = "C-";
    //echo $grades["Eric"];

    if (isset($_POST["students"]) && isset($grades[$_POST["students"]]) ) {
        echo $_POST["students"] . " - " . $grades[$_POST["students"]];
    } else {
        echo "Student doesn't exist";
    }

    ?>

</body>

</html>