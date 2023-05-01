<?php

//you have 2 email subscribers - campaignMonitor and Drip, you can switch between the two, without affecting 
// the controller function

class CampaignMonitor {
    public function subscribe($email) {
        echo 'Using campaing monitor';
    }
}

class Drip {
    public function subscribe($email) {
        echo 'Using Drip';
    }
}

class NewsletterSubscriptionController {
    public function store($newsletter){
        $email = 'joe@examples.com';
        $newsletter->subscribe($email);

    }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new Drip());