<?php

# __toString() is one of the magic method of PHP. It is automatically called when some trying to direcity echo out or print out the object of the class. If __toString() is note defined then it gives error of object cannot converted to string like this on output and terminate the whole script at that point.

class __toStringMethod{
	public function __toString(){
		return "this is example of __toString magic method ";
	}
}
$tostring = new __toStringMethod();
echo $tostring;
?>