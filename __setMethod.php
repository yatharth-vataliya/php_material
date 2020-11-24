<?php

# __set($name,$value) this method is automatically called when someone try to set a property of class that is no exsiting or private or not defined. It is one of the PHP's magic method.

class person{
	private $firstname;
	private $address;
	protected $name;
	public function __set($name,$value){
		echo "attempted to write to non exisiting propery: $name , $value <br/>";
	}
}
	
	$p=new person();
	$p->name="nothing is valid at here";
	$p->address='sv road';
	$p->firstname='yatharth';
	$p->lastname='vataliya';
	
	echo $p->address;

?>