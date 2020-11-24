<?php 
	require_once 'BankAccount.php';
	class CheckingAccount extends BankAccount{
		private $fee;
		public function __construct($accountNumber,$totalBalance){
			parent::__construct($accountNumber,$totalBalance);
		}
		public function deductFee($fee){
			parent::withdraw($fee);
		}
		
	}

?>