<?php
// https://www.youtube.com/watch?v=yPd-t9YoKwM
// https://www.youtube.com/playlist?list=PLs22jecupX27jocUYX7HOHPTFNjjUBeLD

class Person{
	var $age;
	var $eye_color;
	var $name;

	public $one;
	private $two =3;
	protected $three =3;

	private $word;

	static $population = 0;
	static $people = 20;

	//public function __set(...)
	public function __set($property, $value){
		if((property_exists($this, $property))){
			echo "You succesfuly updated " . $property . " to " . $value . "<br>";
			$this -> $property = $value;
		}
		else{
			echo "Failed to update" . $property . "<br>";
		}
	}
	//public function __get(...)
	public function __get($property){
		echo "You tried to update or access to: " .$property ."<br>";

	}

	public function __construct($age, $eye_color, $name){
		$this->age = $age;
		$this->eye_color = $eye_color;
		$this->name= $name;
		echo "This is the age: " . $this->age . "<br>";
		echo "This is the eye color: " . $this->eye_color . "<br>";
		echo "Name: " . $this->name . "<br>";  
		self::$population++;
		echo "This is the current number of instance: " . self::$population ."<br>";
	}

	static public function say_population(){
		echo "This is the population: " . self::$population. "<br>";
	}

	function sayNums(){
		echo $this->one;
		echo $this->two;
		echo $this->three;
	}

	function say_age(){
		echo "This is the age: " . $this->age. "<br>";
	}

	

}

$dude = new Person(22,"Brown","Paco");
$girl = new Person(44,"Blue","Maria");
$bob = new Person(55,"Green","Bob");
$Prueba = new Person(66, "Black","Prueba");

$dude->word;
$dude->two=2;
$dude->three=5;
$dude->word="Hola";
echo "<br>";
echo "DUDE: <br>";
$dude->haha=55;
$dude->word;
echo $dude->haha;
echo $dude->age;
echo "<br>";
echo $dude->eye_color;
echo "<br>";
echo $dude->one;
echo $dude->two;
echo $dude->three;
echo $dude->say_population();
echo "GIRL: <br>";
echo $girl->haha;
echo $girl->age;
echo "<br>";
echo $girl->eye_color;
echo "<br>";
echo $girl->one;
echo $girl->two;
echo $girl->three;
echo $girl->say_population();
echo "BOB: <br>";
echo $bob->haha;
echo $bob->age;
echo "<br>";
echo $bob->eye_color;
echo "<br>";
echo $bob->one;
echo $bob->two;
echo $bob->three;
echo $bob->say_population();
$dude->word=20;
echo $dude->word;