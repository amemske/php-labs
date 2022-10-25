<?php





// Read the JSON file
$json = file_get_contents('data/data1.json');

// Decode the JSON file
$json_data = json_decode($json,true);

//data
$data = $json_data['match'][0];

// Display data
// echo '<pre>';
// var_dump($data); //print_r($json_data); //var_dump($json_data['match'][0]);
// echo '</pre>';

// echo '<hr/>';



?>
