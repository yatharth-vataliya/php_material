<?php

class Basic{
    public $public="public";
    protected $protected="protected";
    private $private="private";

    public function __construct(){
        echo "Constructor is called of class ".__CLASS__."<br/>";
    }

    public function dipslay(){
        echo "Welcome Basic Class";
    }

}

$basic=new Basic();
echo $basic->public; //valid;
// echo $basic->protected; //invalid;
// echo $basic->private; //invalid;

?>