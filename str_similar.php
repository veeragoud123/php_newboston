<!-- similar function -->

<?php 
	$str1='I am learning php coding';
	$str2='I want to learn php coding...';
	// similar_text() function will show the similarity between two strings in percentages
	similar_text($str1,$str2,$res);
	echo $res;
?>