<?php
/**
 * This Script demonstrate about magic methods;
 */

class Magic{
    public $message="Hello........J :)";

    public function __construct(){
        /**
         * __construct is called when class object is created and we can also pass argument in constructor like normal method;
         */
        echo "Object of ".__CLASS__." class is created";
        echo "<br/>";
    }

    # __get($name) is one of the PHP's magic method. It is called automatically when we try to access any class variable that is not existing or private or not defined with in the class. It has one argument and that is name of the variable that we try to access. For Example:- 

    public function __get($name){
		echo "attempted to read non exisiting or not valid or private property : $name <br/>";
    }
    
    # __isset($name) is one of the magic method that is called automatically when we try to check of availability of variable of any class by it's isset() function and that is not defined or non existing or private or protected for that class. It have one argment that is name of that property that we want to check.

    public function __isset($name){
		echo "are you trying to isset on $name  <br/>";
    }
    
    # __set($name,$value) this method is automatically called when someone try to set a property of class that is no exsiting or private or not defined. It is one of the PHP's magic method.

    public function __set($name,$value){
		echo "attempted to write to non exisiting propery: $name , $value <br/>";
    }
    
    # below example is used for unsetting variable that is not defined it is one of the magic method __unset($param) is automatically called when try to unset any  variable which is not a part of referenced object that is not defined. It has one argument and that is name of the variable that we are trying to unset without declearing it. Also a variable that is declare with private access specifier is reason to trigger the __unset method on it's referenced class.

    public function __unset($name){
		echo "are you try to unset on $name  <br/>";
    }
    
    # __toString() is one of the magic method of PHP. It is automatically called when some trying to direcity echo out or print out the object of the class. If __toString() is note defined then it gives error of object cannot converted to string like this on output and terminate the whole script at that point.

    public function __toString(){
		return "this is example of __toString magic method <br/>";
    }
    
    public function __destruct(){
        echo "it is also one of the magic method <br/>";
    }

}

$magic=new Magic();
echo $magic->mesaage;
echo "<br/>";

$value=isset($magic->model);
$magic->name;
$magic->firstname="FirstName";
unset($magic->destroy);
echo $magic;
?>