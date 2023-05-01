<?php
// In PHP, a singleton is a design pattern that restricts the instantiation of a class to a single instance 
// and provides a global point of access to that instance. The singleton pattern is useful when you want
// to ensure that only one instance of a class exists at any given time, and that this instance
// can be easily accessed from anywhere in your code
// In this example, we define a Database class that represents a database connection. The class has a
// private constructor that initializes the database connection, and a public static method called 
// getInstance that returns the single instance of the class.
// The getInstance method first checks whether the $instance variable is null. If it is, it creates a new
// instance of the Database class using the private constructor. If the $instance variable is not null,
// it simply returns the existing instance.

class Database {
    private static $instance;
        private function __construct(){
            //create db connection
        }
        public static function getInstance(){
            if(!self::$instance){ //check whether the instance variable in null
                self::$instance = new Database(); //create instance since it's not there
            }
            return self::$instance; //return instance if it exists
        }
        public function query($sql){
            // Execute SQL query
        }
    
}

$db = Database::getInstance();
$db->query("SELECT * FROM users");