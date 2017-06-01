<!-- string trim  -->
<?php 
	$str='  This is an string example   ';
	$string_trimmed=trim($str);
	echo 'Before trim:'.' '.$str."<br>";
	var_dump($str);
	echo "<br>";
	echo 'After trim:'.' '.$string_trimmed."<br>";
	var_dump($string_trimmed);
	
	
	
	// trim: it is used to stripe spaces in a string
	//rtrim: used to stripe spaces from right side of the string
	//ltrim:used to stripe spaces from left side of the string
?>