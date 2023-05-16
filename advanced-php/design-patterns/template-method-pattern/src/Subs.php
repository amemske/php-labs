<?php
namespace Myapp;

abstract class Subs
{
    //make the sub
    //layBread
    //addLettuce
    //addSauces

    public function make(): void
    {
        $this->layBread(); //similar
        $this->addLettuce();//similar
        $this->addSauces();//similar
        $this->addToppings(); //different
    }

    protected function layBread(): void
    {
        var_dump('laying the bread');
    }

    protected function addLettuce(): void
    {
        var_dump('adding the lettuce');
    }

    protected function addSauces(): void
    {
        var_dump('adding the sauces');
    }

    protected abstract function addToppings(); //each subclass will have own implementation

}