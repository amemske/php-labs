<?php
/* cookies are a way to store small amounts of data on the client's computer,
 which can be retrieved and used by the server on subsequent requests.
 They are used to implement various features such as user authentication, 
 shopping carts, and customized user */

//set a cookie
setcookie('subject', 'english', time() + 86400 * 30);

if (isset($_COOKIE['subject'])) {
    echo $_COOKIE['subject'];
}

//delete cookie - set it to a previous date
setcookie('subject', '', time() - 86400);