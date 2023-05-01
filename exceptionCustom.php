<?php

// class MaximumMembersReachedException extends Exception {
//     protected $message = 'You may not add more than 3 members';
// }


class TeamException extends Exception {
    public static function fromTooManyMembers(){
        return  new static('You may not add more than 3 members');
    }
    
    }
    
class Member {
public $name;

public function __construct($name)
{
    $this->name = $name;
}

}

class Team {
protected $members = [];

public function add(Member $member){
    if (count($this->members) === 3 ){
      throw TeamException::fromTooManyMembers();
       
    }
    //push to the array
    $this->members[] = $member;

}

public function members(){
    return $this->members;
}

}

class TeamMembersController {

    public function store(){

        try{
            $team = new Team;
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('Antony'));
            $team->add(new Member('John'));
            $team->add(new Member('John'));
            var_dump($team->members());
        }
        catch(TeamException $e){
           // var_dump($e->getMessage());
            var_dump($e);
        }
        
    }

}

(new TeamMembersController())->store();


