<?php

/*
superglobal are all arrays
$_GET -  Contains information  about variables passed through a URL or a form.
$_POST - Contains information about variables passed  through a form.
$_COOKIE - Contains information about variables passed through a cookie
$_SESSION - Contains information about variables passed through a session
$_SERVER - Contains information about the server
$_ENV - Contains information about the environment variables
$_FILES - Contains information about the files uploaded via HTTP POST method
$_REQUEST - Contains information about  variables passed through the form  or URL

*/
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';