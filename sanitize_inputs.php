<?php

/*
//Method 1
if (isset($_POST['submit'])) {
    $subject = htmlspecialchars($_POST['subject']);
    $age = htmlspecialchars($_POST['marks']);
    echo $subject;
    echo $age;
}

*/
if (isset($_POST['submit'])) {
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $subject;
    echo $age;
}




?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="subject">subject</label>
    <input type="text" name="subject" id=""><br>
    <label for="marks">marks</label>
    <input type="text" name="marks" id=""><br>
    <input type="submit" value="submit" name="submit">


</form>