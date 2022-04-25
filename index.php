<?php 

class User
{

}

class AchivementBadge
{
  public $title;
  public $description;
  public $points;

  public function awardTo($user)
  {
    //

  }
}

class Team
{
  protected $name;
  protected $members = [];

  public function __construct($name, $members = [])
  {
    $this->name = $name;
    $this->members = $members;
    
  }

  public static function start(...$params)
  {
    return new static(...$params);

  }

  public function name()
  {
    return $this->name;
  }

  public function members()
  {
    return $this->members;

  }

  public function add($name)
  {
    $this->members[] = $name;

  }

  public function cancel()
  {

  }

  public function manager()
  {

  }
}

class Member
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function lastViewed()
  {

  }

}


$acme = Team::start('Acme', [
  new Member('John Dow'),
  new Member('Jene Dow'),
]);


var_dump($acme->members())


?>