<?php
/**
 * This Script demonstrate about Type Hinting;
 */

class Typehinting{
    public function display(string $message){
        /**
         * This is called as argument type hinting;
         */
        echo $message."<br/>";
    }

    public static function hint(int $x) : string {
        /**
         * This example contain both argument hinting and return type hinting;
         * if we specified return type then function must return the specified type;
         */

        return "Passed argument is :- $x";

    }
}

$type=new Typehinting();

$type->display("Message is be happy....:)"); // argument must be string otherwise it will give fata error;
echo $type->hint(101);

?>