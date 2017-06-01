<!-- string shuffle function -->

<?php 
	$str="Helloworld123456";
	$string_shuffle=str_shuffle($str);
	//echo "$string_shuffle";
	$half=substr($string_shuffle, 0, strlen($str)/2);
	echo "$half";
?>