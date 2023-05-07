<?php 
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://randomuser.me/api/',
    'verify' => false, // disable SSL verification
]);

$response = $client->request('GET', '', ['query' => ['results' => 10]]);

if ($response->getStatusCode() === 200) {
    $data = json_decode($response->getBody(), true);
    //print_r($data);
} else {
    // handle error
}