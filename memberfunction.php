<?php

class memberFunction{
	public $name="";


	function show($name){
		return $this->name=$name;
	}
}



		$memfunc=new memberFunction();

		echo $memfunc->show("Atmiya");

?>