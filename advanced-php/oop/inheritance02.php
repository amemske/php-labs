<?php

class Collection {
    protected array $items;

    public function __construct( array $items)
    {
        $this->items =  $items;
        
    }
    public function sum($key){
         return  array_sum(array_map(function($item)  use ($key){
             return $item->$key;;
        }, $this->items));
    }
}

class videosCollection  extends Collection 
{
    public function length() {
        return $this->sum('length');    
    }

}

class Video {
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }

}

$videos = new VideosCollection([
    new Video('Video 1', 200),
    new Video('Video 2', 300)
]);

echo $videos->length();