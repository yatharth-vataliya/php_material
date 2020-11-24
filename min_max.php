<?php 
class minimum_maximum{
	public $min=0;
	public $max=0;
	public function getMin(){
		$args=func_get_args();
		$this->min=$args[0];
		foreach($args as $arg){
			if($arg<=$this->min){
				$this->min=$arg;
			}
		}
		echo "minimum is :- $this->min"."<br/>";
	}
	public function getMax(){
		$args=func_get_args();
		foreach($args as $arg){
			if($arg>=$this->max){
				$this->max=$arg;
			}
		}
		echo "maximum is :- $this->max "."<br/>";
	}
}
$find=new minimum_maximum();
$find->getMax(5,3,5,3,6,7,8,678);
$find->getMin(2,386,385,694,95,55,0,-7);
?>