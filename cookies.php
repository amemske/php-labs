<?php
//set a cookie
setcookie('subject', 'english', time() + 86400 * 30);

if (isset($_COOKIE['subject'])) {
    echo $_COOKIE['subject'];
}

//delete cookie - set it to a previous date
setcookie('subject', '', time() - 86400);