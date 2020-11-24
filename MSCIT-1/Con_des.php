<?php
/**
 * This Script demonstrate about constructer and destructor;
 * 
 */

class Con_des{
    public $name;

    public function __construct(string $name){
        echo "variable initialization is complete<br/>";
        $this->name=$name;
    }

    public function name(){
        echo $this->name;
        echo "<br/>";
    }

    /**
     * function __destruct called automatically when object is destroyed using unset() or scirpt end;
     */
    
    public function __destruct(){
        echo "destructor is called";
    }

}

$con=new Con_des("PHP");
$con->name();


?>