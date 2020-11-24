<?php 
	
	class AddressDisplay{
		private $addressType="";
		private $addressText="";
		
		public function getAddressType(){
			return $this->addressType;
		}
		public function setAddressType($address){
			$this->addressType=$address;
		}
		
	public function getAddressText(){
			return $this->addressText;
		}
		
		public function setAddressText($text){
			$this->addressText=$text;
		}
		
		
	}
	
	class EmailAddress {
		private $emailAddress='';
		public function getEmailAddress(){
			return $this->emailAddress;
		}
		public function setEmailAddress($email){
			$this->emailAddress=$email;
		}
	}
	
	class EmailAddressDisplayAdapter extends AddressDisplay{
		public function __construct($email){
				$this->setAddressType("email");
				$this->setAddressText($email->getEmailAddress());
			
		}
	}

?>