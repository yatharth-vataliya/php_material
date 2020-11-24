<?php 

class Ellipse{

	public static $area=0;
	public static $base=0;
	
	public static function setCordinates($a,$b){
		self::$area=$a;
		self::$base=$b;

		// echo "nothing";
	}

	public static function Area(){
		return (self::$area*self::$base*M_PI);
	}



}

Ellipse::setCordinates(1,30);

//Ellipse::setCordinates(12,30);

//echo $ellipse->Area();

echo Ellipse::Area();

?>