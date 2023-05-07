<?php

//you have 2 email subscribers - campaignMonitor and Drip, you can switch between the two, without affecting 
// the controller function
//an interface is a formal contract

interface Newsletter {
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter{
    public function subscribe($email) {
        echo 'Using campaing monitor';
    }
}

class Drip implements Newsletter {
    public function subscribe($email) {
        echo 'Using Drip';
    }
}

class NewsletterSubscriptionController {
    public function store(Newsletter $newsletter){
        $email = 'joe@examples.com';
        $newsletter->subscribe($email);

    }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new Drip());


// the Newsletter object is not the interface itself. The Newsletter interface is a blueprint for a set of methods that any class implementing the interface must provide.

// In the code example you provided, the Newsletter interface defines a single method, subscribe(), which must be implemented by any class that implements the Newsletter interface.

// The Newsletter object passed as a parameter to the store() method is not the interface itself, but rather an instance of a class that implements the Newsletter interface. This object could be an instance of the CampaignMonitor class or the Drip class, both of which implement the Newsletter interface.

// By passing an instance of a class that implements the Newsletter interface to the store() method, the method can call the subscribe() method on that object, regardless of which specific class the object belongs to. This allows for flexibility and modularity in the code.

// I hope this helps clarify the distinction between the Newsletter interface and the Newsletter object! Let me know if you have any further questions.