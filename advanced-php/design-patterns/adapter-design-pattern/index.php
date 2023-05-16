<?php 

// An adapter is a design pattern that enables you to convert the interface of a class into another interface that the  clients expect.
// It allows you to make classes work together that could not otherwise because of incompatible interfaces.
//It makes incompatible interfaces work together
require 'vendor/autoload.php';

use Advanced\Book;
use Advanced\BookInterface;
use Advanced\eReaderAdapter;
use Advanced\Kindle;
use Advanced\Nook;

class Person {
    public function read(BookInterface $book): void
    {
        $book->open();
        $book->turnPage();

    }
}





(new Person)->read(new Book);

(new Person)->read(new eReaderAdapter(new Kindle()));

(new Person)->read(new eReaderAdapter(new Nook()));