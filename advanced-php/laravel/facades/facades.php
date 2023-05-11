<?php 

/* 
Facades are a design pattern that allow you to use a simple,static, interface to access complex
functionality that is located in the application's service container.
Facades allow you to access an object from the container without needing to explicitly instantiate the object or
resolve it from the container manually.


    */

use Illuminate\Support\Facades\Mail;

Mail::to('jane@example.com')->send(new WelcomeEmail());