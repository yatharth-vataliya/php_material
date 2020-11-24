<?php 
	
	require_once 'CheckingAccount.php';
	require_once 'SavingAccount.php';
	
	$save = new SavingAccount(1001,10000,10); 
	$check = new CheckingAccount(1001,50000);
	
		
	echo $save->getBalance()."<br/>";
	$save->deposit(1000);
	echo $save->getBalance()."<br/>";
	$save->withdraw(20000);
	echo $save->getBalance()."<br/>";
	
	$check->deductFee(5000);
	echo $check->getBalance();
 
?>