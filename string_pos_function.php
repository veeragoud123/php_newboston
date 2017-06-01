<!-- string pos function -->
<?php 
	$offset=0;
	$find='is';
	$find_length=strlen($find);
	$string='this is a string position function checking for is match';
	
	//$string_position=strpos($string, $find);
	//echo "$string_position";
	while ($string_position =strpos($string, $find, $offset))
	 {
		echo "<strong>$find</strong>".' '. 'found at'.' '.$string_position.' '.'position'.'<br>';
		$offset=$string_position+$find_length;
	 }
?>