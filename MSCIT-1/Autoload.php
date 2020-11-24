<?php

/**
 * This Script  demonstrate about class autoloading using __autoload() magic method;
 * 
 * FYI:- __autoload() is deprecated in  php 7.2 0 and onwards Relying on this feature is highlly discouraged; 
 * use spl_autoload_register() function;
 * 
 */

function __autoload($classname){
    require_once($classname.".php");
}

$real=new real();
$real->display();

echo "<br/>";

$basic=new Basic();


?>