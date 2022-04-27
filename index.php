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


//var_dump($acme->members())


//Another example with inheritance

class CoffeMaker
{
	public function brew()
	{
		var_dump('Brewing the coffe');

	}
}

class SpacialityCoffeMaker extends CoffeMaker
{
	public function brewLatte()
	{
		var_dump('Brewing a latte');
	}
}


//(new SpacialityCoffeMaker())->brew();
//(new SpacialityCoffeMaker())->brewLatte();

class Collection
{
	protected array $items;

	public function __construct(array $items)
	{
		$this->items = $items;
	}

	public function sum($key)
	{
		return array_sum(array_column($this->items, $key));
	}
}

class VideosCollection extends Collection
{
	public function length()
	{
		return $this->sum('length');
	}
}

class Video
{
	public $title;
	public $length;

	public function __construct($title, $length)
	{
		$this->title = $title;
		$this->length = $length;
	}
}

$videos = new VideosCollection([
	new Video('Some Video', 100),
	new Video('Some Video 2', 200),
	new Video('Some Video 3', 300)
]);

//echo $videos->length();

?>