<?php 
// Memcache is a PHP extension that provides a distributed memory caching system for storing and retrieving data in memory.
//  It allows you to cache frequently accessed data, such as database query results or API responses,
//  to improve the performance and scalability of your application

// 1. connect to a Memcache server by creating a new Memcache object and calling the connect() method. 
// 2. check if the data is already cached by calling the get() method with a unique key. If the data is not cached,
// 3. we retrieve it from the database and cache it using the set() method, which accepts the key, data, expiration time, and flags.
// 4. Finally, we output the data by looping through each row and displaying the name and email columns.

// Connect to the Memcache server
$memcache = new Memcache();
$memcache->connect('localhost', 11211);

// Check if the data is cached
$key = 'mydata';
$data = $memcache->get($key);

// If the data is not cached, retrieve it from the database and cache it
if ($data === false) {
    $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'myusername', 'mypassword');
    $stmt = $pdo->query('SELECT * FROM mytable');
    $data = $stmt->fetchAll();
    $memcache->set($key, $data, 0, 3600); // cache for 1 hour
}

// Output the data
foreach ($data as $row) {
    echo $row['name'] . ' - ' . $row['email'] . '<br>';
}