<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'feedback_project');


//Create connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


//check connection

if($conn->connect_error){
    die('Connection error' . $conn->connect_error);
} else {
//echo 'Connected';
}