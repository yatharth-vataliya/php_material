<?php 
class calculate{
	public $first=0;
	public $second=0;
	public function __construct($first,$second){
		$this->first=$first;
		$this->second=$second;
	}
	public function addition(){
		return $this->first+$this->second;
	}
	public function substraction(){
		return $this->first-$this->second;
	}
	public function multiplication(){
		return $this->first*$this->second;
	}
	public function division(){
		return $this->first/$this->second;
	}
}
$cal= new calculate(100,10);
echo $cal->addition()."<br/>";
echo $cal->substraction()."<br/>";
echo $cal->multiplication()."<br/>";
echo $cal->division()."<br/>";
?>