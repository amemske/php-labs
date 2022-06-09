<?php
class Movie
{
    public $title;
    private $rating; //any code outside the movie class connot modify it

    function __construct($aTitle, $aRating)
    {
        $this->title =   $aTitle;
        $this->setRating($aRating); // everything now goes thru this method since it's private
    }

    //getter function -- to be used by private properties
    function getRating()
    {
        return $this->rating;
    }
    //setter function -- private properties can be changed
    function setRating($changedRating)
    {
        if ($changedRating == 'G' || $changedRating == 'PG' || $changedRating == 'PG-13' || $changedRating == 'R' || $changedRating == 'NR') {
            $this->rating = $changedRating;
        }
        $this->rating = "NR";
    }
}


$avengers = new Movie("Avengers", "fedfk");
//$avengers->setRating("dog");

echo $avengers->getRating();