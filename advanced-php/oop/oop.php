<?php

class User
{
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    function getName()
    {
        return $this->name;
    }
}
//instantiate a user object
//$user1 = new User();

//$user1->setName('Brad');

$user1 = new User('Brad', 'brad@gmail.com', '1234');

echo $user1->name;
echo $user1->email;

//var_dump($user1);

//inheritance

class Employee extends User
{
    public $title;
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
$employee1 = new Employee('Sara', 'sara@gmail.com', 'kittykat', 'CEO');

echo $employee1->getTitle();