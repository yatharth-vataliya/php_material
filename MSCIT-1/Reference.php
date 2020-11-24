<?php
/**
 * This Script demonstrate about Reference to any type of variable;
 */

 class Reference{
    public $name="LARAVEL";
}

$ref=new Reference();

echo $ref->name;
echo "<br/>";

$ref1=$ref;

echo $ref1->name;
echo "<br/>";

$ref1->name="LARALITE";

echo $ref1->name;
echo "<br/>";

echo $ref->name;
echo "<br/>";

$name="LARACON";
echo $name;
echo "<br/>";
$name1=$name; // this is copy of the value of variable;
echo $name1;
echo "<br/>";
$name="LARACON US";
echo $name;
echo "<br/>";
echo $name1;
echo "<br/>";
$name1=&$name; // this is copy of the reference of variable;
echo $name1;
echo "<br/>";
$name1="LARAVEL.IO";
echo $name;
echo "<br/>";
?>