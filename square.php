<?php

class Square{
	public $area=0;

	function setCordinates($area){
		$this->area=$area;
	}

    function getArea(){
		return ($this->area*$this->area);
	}
}

$square=new Square();

$square->setCordinates(10);


echo $square->getArea();


?>