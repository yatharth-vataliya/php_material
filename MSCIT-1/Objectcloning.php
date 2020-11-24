<?php
/**
 * This Script demonstrate about Object Cloning;
 * Using clone keyword the current state of object is copied in new variable;
 * For example:- first you change the value of parent class variable value and then clone the object of that class then new object have also changed value of that variable; 
 */

class Objectcloning{
    public $clone="clone";

    public function __clone(){
        echo "this is method is called when clone of object is created using clone keyword<br/>";
    }

    public function display(){
        echo "display method is called <br/>";
    }
}

$clone=new Objectcloning();

var_dump($clone);
echo "<br/>";
echo $clone->clone;
echo "<br/>";

$clone->clone="if you change value of variable here then cloned object have that changed value variable";

$clone2=clone $clone;

$clone->clone="if you change value of variable here then there is no effect in cloned object";

echo $clone2->clone;

?>