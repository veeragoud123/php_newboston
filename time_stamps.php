<!-- time stamps -->
<?php 
	$time=time();
	//$new_time=date('H:i:s',$time); //hour:min:sec
	//$new_time=date('d m y',$time); //1 06 17
	//$new_time=date('D M Y',$time);	 //thur june 2017
	$actual_time=date('D M Y @ H:i:s',$time);	 //thur june 2017

	echo "The current date/time is: $actual_time";
?>