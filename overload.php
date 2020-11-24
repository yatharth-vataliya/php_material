<?php  

class overload{
	public function getSum(){
		$args=func_get_args();
		if(count($args)<1) return 0;

		$sum=0;
		
		foreach($args as $arg){
			
			$sum+=$arg;
		
		}
		echo func_num_args()."<br>";
		return $sum;
	}
}

$sum= new overload();

echo $sum->getSum(2,3,5,6)."<br>";



?>