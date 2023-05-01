<?php
//abstract is a blueprint, unlike an interface it contains methods      
abstract class AchievementType {
    public function name(){
        $class = (new ReflectionClass($this))->getShortName();
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