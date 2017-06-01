<!-- string functions -->
<?php 
$str='India is my & country .';
$string_word_count=str_word_count($str,0,'.&');
print_r($string_word_count);


// str_word_count() function will take 3 parameters

// 1.String 
// 2.Format-->(0,1,2)
// 	a. 0: returns word count
// 	b. 1: returns an array containing all the words in a 		string
// 	c. 2: returns an associative array where 
// 		  key is the numeric position of the word in the string and 
// 		  value is actual word itself.  
// 3.Char list: It can be any special chars like(#$%^...)

?>



