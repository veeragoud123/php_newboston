<!--  String function addslashes  -->
<?php 
	$str='this is a "String1" <img src="image.jpg"> example';
	$string_slashes=htmlentities(addslashes($str));
	echo $string_slashes;
 ?>