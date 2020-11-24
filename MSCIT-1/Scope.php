<?php

/**
 * This Script demonstrate about scope resolution operater and static keyword;
 */

class Scope{
    public static $counter;

    public static function loop(){
        echo self::$counter;
        echo "<br/>";
        echo Scope::$counter;
        echo "<br/>";
        echo "<br/>";
    }

}

class Child extends Scope{

}

Scope::$counter=1;

Scope::loop();

echo "<br/>";

Child::$counter=100;

Scope::loop();

function track(){
    static $count=0;
    $count++;
    echo $count;
    echo "<br/>";
}

track();
track();
track();

?>