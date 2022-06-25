<?php

//sessions are stored in the server

/*
//Method 1
if (isset($_POST['submit'])) {
    $subject = htmlspecialchars($_POST['subject']);
    $age = htmlspecialchars($_POST['marks']);
    echo $subject;
    echo $age;
}

*/

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    // echo $username;
    //echo $password;

    if ($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('location:/extras/dashboard.php');
    } else {
        echo 'Incorrect login';
    }
}





?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="username">username</label>
    <input type="text" name="username" id=""><br>
    <label for="password">password</label>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="submit" name="submit">


</form>