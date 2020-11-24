<?php 

class message{
	public $name="Hello All,  ";

	public function show($nm){
			return $this->name.=$nm;
	}
}

$message=new message();

echo  $message->show("Atmiya");

?>