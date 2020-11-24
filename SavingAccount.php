<?php
	require_once 'BankAccount.php';
	class SavingAccount extends BankAccount{
		private $interestRate;
		
		public function __construct($accountNumber,$totalBalance,$interestRate){
			parent::__construct($accountNumber,$totalBalance);
			$this->interestRate=$interestRate;
		}
		
		public function addInterest($additionalInterest){
			$this->interestRate+=$additionalInterest;
		}
	}


?>