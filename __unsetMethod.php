<?php 
# below example is used for unsetting variable that is not defined it is one of the magic method __unset($param) is automatically called when try to unset any  variable which is not a part of referenced object that is not defined. It has one argument and that is name of the variable that we are trying to unset without declearing it. Also a variable that is declare with private access specifier is reason to trigger the __unset method on it's referenced class.

class __unsetMethod{
	private $name;
	public $value;
	protected $skills;
	public function __unset($name){
		echo "are you try to unset on $name  <br/>";
	}
}
$data = new __unsetMethod();

unset($data->obj);
unset($data->name);
unset($data->value);
unset($data->skills);

?>