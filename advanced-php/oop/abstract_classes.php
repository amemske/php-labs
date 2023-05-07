<?php
// This code defines a PHP class with three methods: name(), icon(), and qualifier().
// The name() method uses the ReflectionClass class to get the short name of the current class,
// and then transforms the name from a camel-case format to a more readable format
// by adding a space before each capital letter. Finally, it returns the transformed name.

// The icon() method uses the name() method to get the transformed name of the current class,
// replaces the spaces with hyphens, appends the .png extension, and returns the resulting string.
// This method assumes that there is a corresponding PNG icon file for each class

//abstract is a blueprint, unlike an interface it contains methods      
abstract class AchievementType {
    public function name(){
        $class = (new ReflectionClass($this))->getShortName();
      //  preg_replace() function replaces any uppercase letter in the $class string with a space followed by the uppercase letter itself. This effectively adds a space before each uppercase letter in the string.
        return trim(preg_replace('/[A-Z]/', ' $0', $class)); // $0 means entire match
    }
    public function icon(){
        return  strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }
    abstract public function qualifier($user); //abstract means there is no code, just a blueprint therefore it has to be declared by the child classes
}

class FirstThousandPoints extends AchievementType  {
   
    public function qualifier($user){
    }
}

class FirstBestAnswer extends AchievementType{
   
    public function qualifier($user){
    }
}

$achievement1 = new FirstThousandPoints();


echo $achievement1->name();
echo '<br>';
echo $achievement1->icon();
echo '<br>';