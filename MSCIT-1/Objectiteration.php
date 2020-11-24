<?php
/**
 * This Script demonstrate about Object Iteration;
 */

class Objectiteration{
    public $course="MSCIT";
    public $city="Rajkot";
    protected $class="MSCIT-1";
    private $college="SAURASHTRA UNIVERSITY";

    public function display(){
        echo "Hello";
    }
}

$object=new Objectiteration();

foreach($object as $key=>$value):
    echo "key is $key and value is $value";
    echo "<br/>";
endforeach;


?>