<?php
//Static properties are shared across all instances of a class, and can be accessed without creating an instance of the class.
// By using static properties and methods, the User class can keep track of information that is shared across all instances of
// the class, without requiring each instance to maintain its own copy of that information
// In this example, we have a User class that keeps track of the total number of users created ($totalUsers)
// and the number of admin users created ($adminUsers) using public static and private static properties.
// When a new user is created using the User constructor, the $totalUsers property is incremented by 1, and
// if the user is an admin user, the $adminUsers property is also incremented by 1.
// We can use the public static methods getAdminUserCount() and getTotalUserCount() to retrieve the current values 
// of the $adminUsers and $totalUsers properties, respectively. In the example code above, we call these methods to
// output the total number of users created and the number of admin users among them.
// In summary, public static and private static properties can be useful in real-world applications for keeping track
// of global state or statistics within a class. The public static properties and methods can be used to provide access
// to this state from outside the class, while the private static properties and methods can be used to keep this
// state hidden from outside the class.

class User {
    public static $totalUsers = 0;
    private static $adminUsers = 0;

    public $username;
    public $isAdmin;

    public function __construct($username, $isAdmin = false) {
        $this->username = $username;
        $this->isAdmin = $isAdmin;

        self::$totalUsers++;

        if ($isAdmin) {
            self::$adminUsers++;
        }
    }

    public static function getAdminUserCount() {
        return self::$adminUsers;
    }

    public static function getTotalUserCount() {
        return self::$totalUsers;
    }
}

$user1 = new User('alice');
$user2 = new User('bob', true);
$user3 = new User('charlie', true);

echo "There are " . User::getAdminUserCount() . " admin users out of " . User::getTotalUserCount() . " total users.";