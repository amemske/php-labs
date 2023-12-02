<?php

interface Person {
    public function greet();
}

abstract class AbstractUser {
    abstract public function getName();
    abstract public function getEmail();
    abstract public function getPassword();
}

class User extends AbstractUser {
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($newEmail)
    {
        $this->email = $newEmail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

class Employee extends User implements Person {
    public $title;
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function greet() {
        return "Hello, my name is " . $this->getName() . " and I am an employee.";
    }
}

$user1 = new User('Brad', 'brad@gmail.com', '1234');

echo $user1->getName() . "<br>";
echo $user1->getEmail() . "<br>";
echo $user1->getPassword() . "<br>";

$employee1 = new Employee('Sara', 'sara@gmail.com', 'kittykat', 'CEO');

echo $employee1->getTitle() . "<br>";
echo $employee1->greet() . "<br>";