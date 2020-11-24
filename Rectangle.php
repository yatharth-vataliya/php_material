<?php 

class Rectangle{
	public $width=0;
	public $height=0;


	function setAngle($width,$height){
		$this->width=$width;
		$this->height=$height;
	}

	function getArea(){
		return $this->width*$this->height;
	}
}

$rect=new Rectangle();
$re='setAngle';
$rect->setAngle(30,20);
echo $rect->getArea();

?>