<?php 

//INTERFACE ----------------
/* An interface is a collection of abstract methods that define a set of behaviors that a class must implement.
An interface specifies what methods a class must have, but it does not provide any implementation for those methods.
Instead, the class that implements the interface must provide its own implementation for each method defined in the
interface. Interfaces are a way to define a contract that classes must follow, ensuring that they will have
certain behaviors and allowing them to be used interchangeably in code. */

interface MyInterface {
    public function myMethod();
  }
  
  class MyClass implements MyInterface {
    public function myMethod() {
      // Implementation of the interface method
    }
  }

 //TRAITS ---------------------
/*  a trait is a collection of methods that can be used by multiple classes.
Traits provide a way to define a set of common behaviors that can be shared across different classes,
without requiring those classes to inherit from a common superclass. Traits are similar to interfaces
in that they define a set of methods that must be implemented by any class that uses them, 
but they differ in that traits can also provide default implementations for those methods. */

  trait MyTrait {
    public function myTraitMethod() {
      // Implementation of the trait method
    }
  }
  
  class MyClass {
    use MyTrait;
  }

  //ABSTRACT CLASSES ------------------
/* An abstract class is a class that cannot be instantiated, but can be subclassed.
Abstract classes can contain both abstract and concrete methods,(while an interface only has abstract methods) and they can also define instance variables.
Abstract methods are methods that do not have an implementation in the abstract class, but are instead declared
with the "abstract" keyword and left to be implemented by the subclasses. Abstract classes are useful when
you want to define a common behavior for a group of related classes, but you don't want to provide a complete
implementation for that behavior.
A class can only inherit from one abstract class but can implement many interfaces.
*/

  abstract class MyAbstractClass {
    abstract public function myAbstractMethod();
  }
  
  class MyClass extends MyAbstractClass {
    public function myAbstractMethod() {
      // Implementation of the abstract method
    }
  }