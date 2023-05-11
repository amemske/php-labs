<?php 
/* 
Reset Password using artisan tinker

To get started, run the following command:

php artisan tinker

After that, you can write a standard query to get the user that you want to change the password for. For example, if you know the email of the user, you could do something like this:

$user = App\Models\User::where('email', 'your_email@example.com')->first();
Note: if you are using Laravel 7 or bellow, you might have to change App\Models\User to App\User, depending on where you store your models at.

Once you run the above, you will get the following output with some information for your user:

=> App\User {#3365
     id: 8,
     role_id: 1,
     name: "Bobby",
     email: "bobby@bobbyiliev.com",
     avatar: "users/default.png",
     settings: "{"locale":"en"}",
     created_at: "2021-01-29 08:21:25",
     updated_at: "2021-02-01 11:52:08",
   }

With that, we've got our user defined as $user object so we can now change the password property with:

$user->password = Hash::make('your_super_strong_password_here');
Note: Change your_super_strong_password_here with the new password that you want to use.

As soon as you run this, you will get an output of your hashed password.

Then finally, to persist the changes run:

$user->save();

Output:

=> true
 */