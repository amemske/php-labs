<?php

echo ($_GET['name']);
echo ($_GET['age']);

if (isset($_POST['submit'])) {
    echo ($_POST['subject']);
    echo ($_POST['marks']);
}



?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="subject">subject</label>
    <input type="text" name="subject" id=""><br>
    <label for="marks">marks</label>
    <input type="text" name="marks" id=""><br>
    <input type="submit" value="submit" name="submit">


</form>