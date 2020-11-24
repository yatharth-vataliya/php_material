<?php
/**
 * This Script demonstrate about interface;
 * It is done by interface keyword instead of class keyword;
 */

interface Interfaces{
    /**
     * Interface contains abstract methods only;
     * In interface we can not declare body of method;
     * And also there is no need of abstract keyword and it will cause fata error;
     * 
     */

    public function display($message);

    public static function hi();
}

interface ChildInterface extends Interfaces{
    public function hello();

    /**
     * we extends one or more interface into interface by extends keyword and interfaces support mutliple inheritance;
     */

}

class Child implements ChildInterface{
    
    public static function hi(){
        echo "Hi.. :) <br/>";
    }
    
    public function display($m){
        echo $m."<br/>";
    }
    
    public function hello(){
        echo "Hello...... :)";
    }
}

Child::hi();
$child=new Child();
$child->display("Hello.....");
$child->hello();
?>