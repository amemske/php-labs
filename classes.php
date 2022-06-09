<?php

class Book
{
    var  $title;
    var $author;
    var $pages;
}

$book1 = new Book();
$book1->title = "Harry Potter";
$book1->author = "JK Rowlings";
$book1->pages = 300;

echo $book1->author;