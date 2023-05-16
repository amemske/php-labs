<?php

/*
Autoloading is the process of automatically loading classes in your PHP application without the need for manual
includes or requires. The psr-4 package provides a standardized way of autoloading classes based on the namespace
of the class.
To use psr-4, you need to specify the namespace for your classes and the directory where the classes can
be found in your Composer configuration file (usually named composer.json).

{
    "autoload": {
        "psr-4": {
            "MyNamespace\\": "src/"
        }
    }
}
In this example, any class in the MyNamespace namespace will be automatically loaded from the src directory.
Once you've defined your autoloading rules in your composer.json file, you can use the composer command to
generate an autoloader file for your application:

composer dump-autoload

 * */
