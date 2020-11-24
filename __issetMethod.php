<?php 

# __isset($name) is one of the magic method that is called automatically when we try to check of availability of variable of any class by it's isset() function and that is not defined or non existing or private or protected for that class. It have one argment that is name of that property that we want to check.

class __issetMethod{
	private $name;
	public $value;
	protected $skills;
	public function __isset($name){
		echo "are you trying to isset on $name  <br/>";
	}
}
$isset = new __issetMethod();

isset($isset->obj);
isset($isset->name);
isset($isset->value);
isset($isset->skills);

?>