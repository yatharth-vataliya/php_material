<?php 

class Father
{
	public function pocketMoney()
	{
		return  'Take this 500 $ ';
	}

}

class Elder extends Father
{
		
	public function myEarning()
	{
		echo "Father told me ".$this->pocketMoney();

	}

}

class Younger extends Father
{
	public function myEarning()
	{
		echo "<br/> Father told me ".$this->pocketMoney();

	}

	
}


$elder = new Elder();

$elder->myEarning();  // output Father told me Take this 500 $

$younger = new Younger();

$younger->myEarning();  // output Father told me Take this 500 $


 ?>