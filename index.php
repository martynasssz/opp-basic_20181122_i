<pre><?php

class Animal {

	protected $hasHair = true;
	private $legCount;
	public $name;
	public static $animalCount = 0;

	public function __construct($nickname) {
		$this->name = $nickname;
		echo "Animal with a name ". $nickname ." was released.<br>";
		Animal::$animalCount++;
	}

	public function getLegCount() {
		echo "Someone requested leg count";
		return $this->legCount;
	}

	public function move() {
		echo "My name is " . $this->name . ". I am moving forward<br>";
	}

	public function snooze() {
		echo "I am sleeping<br>";
	}

	public static function tellAnimalCount() {
		echo "At this point there are " . Animal::$animalCount . " objects created";
	}

	public static function commercial() {
		echo "We have a lot of animals!";
	}

}

echo Animal::$animalCount . "<br>";

$newDog = new Animal("Doggy");
$oldFish = new Animal("Nemo");
$myCat = new Animal("Kitty");

$newDog->move();
$newDog->snooze();

$newDog->leg = "asdf";

$oldFish->move();
echo $oldFish->getLegCount();



Animal::$animalCount = 987987;

echo Animal::$animalCount;

Animal::tellAnimalCount();

Animal::commercial();