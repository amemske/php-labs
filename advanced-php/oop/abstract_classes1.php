<?php

// In PHP, an abstract class is a class that cannot be instantiated directly, but can only be used as a base class for other classes.
//  An abstract class is declared using the abstract keyword before the class definition.

// An abstract class may contain abstract methods, which are declared but have no implementation. These abstract methods must be
//  implemented by any class that extends the abstract class. Abstract classes may also contain non-abstract methods, properties,
//   and constants 
  
  abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
echo "<br>";
echo $class->prefixName("James", "", "Hi");
?>