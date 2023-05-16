<?php

/*The observer pattern is a design pattern in object-oriented programming that allows an object,
called the subject, to notify other objects, called observers, when its state changes

Let's say you have a weather station that measures temperature and humidity.
 You want to notify people when the temperature or humidity changes.
You can use the observer pattern to accomplish this.
*/

/*
 * The purpose of the Subject interface in the observer pattern is to define the methods that a subject (or observable object) must implement in order to allow observers to be notified when its state changes.
 * Any class that implements this interface can be used as a subject in the observer pattern, allowing it to notify its observers when its state changes.
 */

interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

/*
 * Define the method that observers must implement in order to be notified when the state of a subject changes.
 * update(Subject $subject): This method is called by the subject to notify the observer that its state has changed.
 * The observer can then update its own state based on the new state of the subject
 * */
interface Observer {
    public function update(Subject $subject);
}

/*
 *The Counter class is an implementation of the Subject interface in the observer pattern.
 * It represents a subject or observable object that keeps track of a count and notifies its observers every time the count is incremented.
 * By implementing the Subject interface, the Counter class can be used as a subject in the observer pattern, allowing it to notify its observers when the count is incremented.
 * The Counter class maintains a list of observers, and every time the increment() method is called, it notifies all the observers in the list by calling their update() method.
 * The Counter class doesn't need to know anything about the observers, only that they implement the Observer interface.
 * This allows for more flexibility and scalability in the design of the system.
 */
class Counter implements Subject {
    private $count;
    private $observers;

//initializes the count to zero and the list of observers to an empty array
    public function __construct() {
        $this->count = 0;
        $this->observers = [];
    }
//This method adds an observer to the list of observers that should be notified when the count is incremented
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }
//This method removes an observer from the list of observers that should be notified when the count is incremented.
    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }
//This method notifies all the registered observers that the count has been incremented, so that they can update their own state accordingly.
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
//This method increments the count and calls the notify() method to notify all the observers that the count has been incremented.
    public function increment() {
        $this->count++;
        $this->notify();
    }
//This method returns the current value of the count.
    public function getCount(): int {
        return $this->count;
    }
}



class Logger implements Observer {
    public function update(Subject $subject) {
        if ($subject instanceof Counter) {
            $count = $subject->getCount();
            echo "Count is now: $count\n";
        }
    }
}

$counter = new Counter();
$logger = new Logger();
$counter->attach($logger);

$counter->increment(); // Output: Count is now: 1
$counter->increment(); // Output: Count is now: 2



