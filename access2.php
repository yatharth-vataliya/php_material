<?php

require_once('access.php');

class access2 extends access{

		protected $hello="hello";
		public $pro;
		public function print(){
			// echo access::$public;
			// echo access::$protected;
			// echo access::$private;

			$access = new access();

		echo $access->protected;
		$this->pro=$access->protected;

		}

}

$ac2=new access2();
echo $ac2->public;
//echo $ac2->hello;
$ac2->print();
echo $ac2->pro;
?>