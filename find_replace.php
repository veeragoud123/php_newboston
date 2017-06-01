<?php 
$offset=0;
if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])) 
{
	$text=$_POST['text'];
	$searchfor=$_POST['searchfor'];
	$replacewith=$_POST['replacewith']; 
	$string_length=strlen($searchfor);
	
	if(!empty($text)&& !empty($searchfor)&& !empty($replacewith))
	{
		while ($strpos=strpos($text, $searchfor,$offset))
		{
			$offset=$strpos+$string_length;
			$text=substr_replace($text,$replacewith,$strpos,$string_length);
		}
		echo "$text";
	}else{
		echo "Please fill all the fields";
	}
}
?>

<form action="find_replace.php" method="POST">
<textarea name="text" rows="6" cols="30"></textarea><br><br>
search for:<input type="text" name="searchfor"><br><br>
replace with:<input type="text" name="replacewith"><br><br>
<input type="submit" value="find and replace">
</form>