<?php

class difference{
	 public $interval;
     public function calculate(DateTime $first,DateTime $second){
		$this->interval=$first->diff($second);
	 	return $this->interval;
	}
}

$sdate = new DateTime("1999-10-03");
$edate = new DateTime("2018-12-25");

$sdate->setTime(1,00,20);
$edate->setTime(2,00,25);
 
$diff=new difference();
$interval=$diff->calculate($sdate,$edate);

// $interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days"."<br/>";
echo $interval->format('%a total days, %d years, %h hours, %I minuts, %s seconds');
?>
