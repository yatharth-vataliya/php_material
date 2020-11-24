<?php
/**
 * This Script demonstrate about Anonymous class;
 */
$message="Happy.......";
$anonymous=new class ($message) {
    public function __construct($message){
        echo $message."<br/>";
    }

    public $name="SAURASHTRA UNIVERSITY";

    public function display(){
        echo "<br/>";
        echo __CLASS__;
    }
};

echo $anonymous->name;
echo "<br/>";
$anonymous->display();

?>