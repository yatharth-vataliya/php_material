<?php 

//require_once "Animal.php";
require_once "Cow.php";
require_once "Lion.php";

$cow=new Cow("Cow1","Vegetarian");
$lion=new Lion("Lion1","Non_vegetarian");

echo $cow->get_family()."<br/>";
echo $cow->get_food()."<br/>";
echo $lion->get_family()."<br/>";
echo $lion->get_food()."<br/>";

?>