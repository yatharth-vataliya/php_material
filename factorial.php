<?php  
class factorial {
public $factorial = 1; 
private $num=0;
	public function __construct($num){
		if(!is_int($num)){
			throw new Exception("invalid argument is given by user");
		
		}
		$this->num=$num;
	}
 	public function result(){
		for ($x=$this->num; $x>=1; $x--)   
			{  
				$this->factorial = $this->factorial * $x;  
			}
 		return $this->factorial;
 	}
	}
// echo " Factorial of $num is $factorial ";  
	try{
		$factorial = new factorial(5);
		echo $factorial->result();
		}catch(Exception $e){
	 echo 'exception:',  $e->getMessage(), "\n";
}
?>  