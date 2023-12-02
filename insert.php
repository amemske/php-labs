<?php
$fullname = '';
$gender = '';
$color = '';

if (isset($_POST['submit'])) { //everything is inside submit
    $ok = true;

    if (!isset($_POST['fullname']) || $_POST['fullname'] === '') {
        $ok = false;
    } else {
        $fullname = $_POST['fullname'];
    }

    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
        $ok = false;
    } else {
        $gender = $_POST['gender'];
    }

    if (!isset($_POST['color']) || $_POST['color'] === '') {
        $ok = false;
    } else {
        $color = $_POST['color'];
    }

    if ($ok === true) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "php_labs";

        $db = mysqli_connect($servername, $username, $password, $database);

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        echo "Connected successfully";

        // Check if the 'users' table doesn't exist, then create it
        $checkTableQuery = "SHOW TABLES LIKE 'users'";
        $result = $db->query($checkTableQuery);
        
        if ($result->num_rows === 0) {
            $createTableQuery = "CREATE TABLE users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fullname VARCHAR(255) NOT NULL,
                gender VARCHAR(1) NOT NULL,
                color VARCHAR(255) NOT NULL
            )";
        
            if ($db->query($createTableQuery) === true) { // same as object === true . Here we are checking if it's truthy
                echo "Table 'users' created successfully.<br>";
            } else {
                echo "Error creating table: " . $db->error;
            }
        }
        

        $sql = sprintf(
            "INSERT INTO users (fullname, gender, color)   
            VALUES ('%s', '%s', '%s');", //uses the sprintf function to construct the SQL query string with the provided values
            $db->real_escape_string($fullname), //escape special characters in a string
            $db->real_escape_string($gender),
            $db->real_escape_string($color)
        );

        $db->query($sql); //executes the SQL query on the database.
        echo '<p>User Added</p>';
        $db->close();//for security reasons  close the connection
    }
}
?>





<form action="" method="post">
    username: <input type="text" name="fullname"><br><br>
    Gender:
    <input type="radio" name="gender" value="f"> Female
    <input type="radio" name="gender" value="m"> Male
    <input type="radio" name="gender" value="o"> Other<br><br>
    Favorite color:
    <select name="color">
        <option value="">Please select</option>
        <option value="I choose red">Red</option>
        <option value="I choose green">Green</option>
        <option value="I choose blue">Blue</option>
    </select><br><br>

    <input type="submit" name="submit" value="Register">
</form>