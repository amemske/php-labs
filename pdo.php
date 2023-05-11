<?php 
// PDO (PHP Data Objects) is a PHP extension that provides an interface for accessing various types of databases, 
// including MySQL, PostgreSQL, SQLite, and others. PDO provides a set of classes and methods for connecting to a database,
//  executing queries, and fetching results, making it a useful tool for database abstraction and portability.



//set up the PDO connection

$dns = 'mysql:host=localhost;dbname=mydatabase';
$username = 'root';
$password = '';
$options = [
PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];
//create new instance of PDO
$pdo = new PDO($dns, $username, $password, $options);

//executes the query by sending it to the database server
$statement = $pdo->query('SELECT * FROM mytable');
//fetch all the rows from the result set and returns them as an array of associative arrays
$results = $statement->fetchAll();

//output the results
foreach($results as $result){
    echo $result['name'] . '-' . $result['email'] . '<br>';
}
