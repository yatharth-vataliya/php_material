<?php 

class accesspecifier {
	public $public='publlic';
	protected $protected='protected';
	private $private='private';

	public function display(){

			echo $this->public;
			echo $this->protected;
			echo $this->private;
	}
}

$ac=new accesspecifier();

echo $ac->public;
// echo $ac->protected; Fatal Error
// echo $ac->private;

$ac->display();



?>