<?php

class Triangle{
	public $base=0;
	public $height=0;


	function setAngle($b,$h){
			$this->base=$b;
			$this->height=$h;
	}

	function AreaOfTriangle(){
		return (1/2*$this->base*$this->height);
	}

}


$triange=new Triangle();


$triange->setAngle(10,10);

echo $triange->AreaOfTriangle();

?>