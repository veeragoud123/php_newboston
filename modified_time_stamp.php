<!-- modified time stamp -->
<?php
	$time=time();
	echo "$time<br>";
	$actual_time=date('d M y @ H:i:s',$time);
	echo $actual_time.'<br>';
	$modified_time=date('d M y @ H:i:s', strtotime('+2 day')); 
	//+1 week,-1 week,+1 week 2 hours 30 seconds,
	echo $modified_time.'<br>';
?>