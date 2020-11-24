<?php
class sort__{
	public $sorted=array();
	public $array=array();
	public function __construct(array $ar){
 		$this->array=$ar;
	}
	public function do_sort(){
		sort($this->array);
		return $this->array;
	}
}
//$unsorted=array(11, -2, 4, 35, 0, 8, -9);
$sortarray = new sort__(array(11, -2, 4, 35, 0, 8, -9));
//$sortyarray = new sort__($unsorted);
print_r($sortarray->do_sort());
?>