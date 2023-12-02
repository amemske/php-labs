<?php

class Book
{
    var  $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages)
    {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
    }
}

$book1 = new Book("Harry Potter", "JK Rowlings", 200);

echo $book1->title;