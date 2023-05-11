<?php 
/* 
Service providers in Laravel are classes that are responsible for binding dependencies
and providing services to your application. Service providers are used to register bindings
in the Laravel service container, which is a powerful dependency injection container that allows
you to easily manage your application's dependencies.

Services can be anything from database connections and caching systems to email sending libraries
and third-party APIs. Service providers are responsible for binding these services to the container,
so that they can be easily accessed throughout your application.

Laravel service providers typically define a register() method, which is used to bind services to
the container, and a boot() method, which is used to perform any necessary setup tasks.

 */

 namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class CustomDatabaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('custom-db', function () {
            return DB::connection('custom');
        });
    }
}

/*
This service provider registers a custom database connection using Laravel's DB facade,
 and binds it to the custom-db key in the service container. This allows you to easily
  access the custom database connection throughout your application by resolving the
   custom-db key from the service container.

*/