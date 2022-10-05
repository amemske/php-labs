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