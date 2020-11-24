<?php

class Constant{
    const NAME="SAURASHTRA UNIVERSITY";

    public function __construct(){
        echo "Constructor is called of Class ".__CLASS__."<br/>";
    }

    public function display(){
        echo "Welcome to Constant Class <br/>";
    }

    public function print_constant(){
        echo self::NAME;
        echo "<br/>";
    }

}
echo Constant::NAME;

echo "<br/>";
$con=new Constant();
echo $con->print_constant();

?>