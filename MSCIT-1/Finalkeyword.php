<?php
/**
 * This Script demonstrate about final keyword;
 */

final class Finalkeyword{
    /**
     * A class that is declare as final is cannot inherited by any other class;
     * Method that are declare final cannot override by subclass;
     */

    public $name="yatharth";

    public final function display(){
        echo "final method <br/>";
    }

}

class Secure{
    public final function demo(){
        echo "this is final method <br/>";
    }
}

class Main extends Secure{
    // public function demo(){
    //     echo "This is not valid";
    // } // this will give fatal error Cannot override final method Secure::demo()
}

$final=new FinalKeyword();
echo $final->name;
echo "<br/>";

$final->name="changing final variable value through it's object is valid ";

echo $final->name;

?>