<?php 

/* Dependency Injection (DI) is a technique used in software development to decouple
  classes and promote code reusability. It involves passing dependencies
  (such as objects or values) into a class from external sources, rather
   than having the class create or retrieve them directly.
   This makes the class more modular and flexible, as it can be easily adapted to work
   with different dependencies without requiring changes to its implementation 
    */


// Service class
class EmailService {
    public function sendEmail($to, $subject, $body) {
        // send email
    }
}

// Client class
class UserRegistration {
    private $emailService;

    public function __construct(EmailService $emailService) {
        $this->emailService = $emailService;
    }

    public function registerUser($name, $email, $password) {
        // register user
        $this->emailService->sendEmail($email, 'Welcome to our site!', 'Thank you for registering.');
    }
}

// Usage
$emailService = new EmailService();
$userRegistration = new UserRegistration($emailService);
$userRegistration->registerUser('John Doe', 'john.doe@example.com', 'password');