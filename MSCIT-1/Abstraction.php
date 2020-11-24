<?php
/**
 * This Script demonstrate about class abstraction;
 * 
 * It is achieved by using abstract keyword;
 */

abstract class Abstraction{
    /**
     * 
     * Abstract class must at list contain one abstract method;
     *  
     */

    public abstract function display($message);

    /**
     * 
     * It can contain also complete method implementaion like normal class;
     * 
     */

     public function call(){
         echo __METHOD__."<br/>";
     }

}

class Child extends Abstraction{
    /**
     * child class have must implement all abstract method of its super abstract class; 
     * 
     */

     public function display($message){
        echo $message."<br/>";
     }
}

$child=new Child;

$child->display("Welcome............! :)");

?>