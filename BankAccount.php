<?php 
	class BankAccount{
		private $accountNumber;
		private $totalBalance;
		/*
		public function __construct(){
			echo "called";
		}
		*/
		public function __construct($accountNumber,$totalBalance){
			$this->accountNumber=$accountNumber;
			$this->totalBalance=$totalBalance;
		}
		
		public function deposit($cash){
			$this->totalBalance+=$cash;
		}
		public function withdraw($cash){
			if($cash>$this->totalBalance){
				echo "You Have not Enough Balance Please Check your Account Very Soon...";
				//die();
				//return false;
			}else
			//$this->totalBalance=$this->totalBalance-$cash;
			$this->totalBalance-=$cash;
		}
		public function getBalance(){
			return $this->totalBalance;
		}
	}	
?>