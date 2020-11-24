<?php


# __get($name) is one of the PHP's magic method. It is called automatically when we try to access any class variable that is not existing or private or not defined with in the class. It has one argument and that is name of the variable that we try to access. For Example:- 

class person{
	var $thisnameisdummy="hello dummy";
	public $firstname;
	protected $lastname;
	private $surname;
	
	public function __get($name){
		echo "attempted to read non exisiting or not valid or private property : $name <br/>";
	}
}

$p=new person();
echo __DIR__;
echo "<br/>";
echo __FILE__;
echo "<br/>";
echo $p->thisnameisdummy;
echo "<br/>";
echo $p->firsname;
echo $p->lastname;
echo $p->surname;
echo $p->address;
echo $p->any_non_exisiting_property;

?>