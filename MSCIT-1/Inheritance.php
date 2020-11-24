<?php

/**
 * This Script demonstrate about inheritance and variable visibility;
 * 
 */

class Base{
    public $public="public";
    protected $protected="protected";
    private $private="private";

    public function __construct(){
        echo "Constructor is called of Class ".__CLASS__."<br/>";
    }

    public function display(){
        echo __METHOD__." is called <br/>";
    }

    protected function hi(){
        echo __METHOD__." is called <br/>";
    }

    private function hello(){
        echo __METHOD__." is called <br/>";
    }


}

/**
 * extends keyword is use to inherit class;
 */

 class Inheritance extends Base{
    
    public function callProtected(){
        $this->hi();
    }

    public function callPrivate(){
        // $this->hello(); // this is not valid and give you a fatal error because private method of class is not inherited to its sub class;
    }

 }
$inheritance=new Inheritance();
$inheritance->display();
$inheritance->callProtected();
$inheritance->callPrivate();
echo $inheritance->public;
// echo $inheritance->protected; // this will also give fata error because protected member of class only availabe for it's Child class;
// echo $inheritance->private; 
?>