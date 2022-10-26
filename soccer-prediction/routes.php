<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');
any('/matches', 'views/matches.php');
// clear route - use this
get('/match/$m', function(){
    $uri = $_SERVER['REQUEST_URI'];

    $path = parse_url($uri, PHP_URL_PATH);
    $pathFragments = explode('/', $path);
    $end = end($pathFragments); //the value is a string
    //echo gettype($end);
        // Read the JSON file
    $json = file_get_contents('data/jp-'.$end.'.json');
    // Decode the JSON file
    $json_data = json_decode($json,true);
    //data
    $GLOBALS['data'] = $json_data['match'][0]; //make it into a global variable

    var_dump($GLOBALS['data']);

   

    include './views/match.php';


  });
//echo the variable
//add the parameter passed as an argument
// use the argument as the name of the json file

any('/404', 'views/404.php');
