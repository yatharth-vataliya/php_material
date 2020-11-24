<?php
/**
 * This Script demonstrate about late static binding through the static keyword;
 */

class Latestaticbinding{
    public static function nameOfClass(){
        echo __CLASS__;
    }

    public static function call(){
        self::nameOfClass(); // output is :- Latestaticbinding
        echo "<br/>";
        static::nameOfClass(); // LateStaticBinding done here. output is :- Child
    }

}

class Child extends Latestaticbinding{
    public static function nameOfClass(){
        echo __CLASS__;
    }
}

Child::call();

?>