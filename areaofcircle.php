<?php
class MyCircle{
	private $radius=0;
	function setRadius($rad){
		$this->radius=$rad;
	}
	function getArea(){
		return $this->radius*$this->radius*M_PI;
	}
}
$circle=new MyCircle();
$circle->setRadius(3);
echo $circle->getArea();
?>