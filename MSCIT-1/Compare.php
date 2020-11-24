<?php
/** 
 * This Script demonstrate about comparing object;
 */

class Compare{
    public $var="compare object";
}

$cmp=new Compare();

$cmp1=new Compare();

$result= $cmp==$cmp1;

var_dump($result);

echo "<br/>";

$result= $cmp===$cmp1;

var_dump($result);

echo "<br/>";

$cmp2=&$cmp;

$result= $cmp===$cmp2;

var_dump($result);

echo "<br/>";

?>