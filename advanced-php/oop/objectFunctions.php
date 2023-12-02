<?php
class Student
{
    var $name;
    var $major;
    var $gpa;

    function __construct($aName, $aMajor, $aGpa)
    {
        $this->name = $aName;
        $this->major = $aMajor;
        $this->gpa = $aGpa;
    }
    //a function to check if the student has honours
    function hasHonors()
    {

        if ($this->gpa >= 3.5) {
            return "true"; //it should be in a bool but for visibility we will use a string
        }
        return "false";
    }
}
//create objects
$student1 = new Student("Jim", "English", 3.7);
$student2 = new Student("Carrey", "Mathematics", 2.1);

echo $student1->hasHonors();
echo "<br>";
echo $student2->hasHonors();