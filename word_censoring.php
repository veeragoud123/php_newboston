<!-- word censoring -->
<?php
$find=array('alex','belly','dane');
$replace=array('a**x','be**y','d**e'); 
if(isset($_POST['user_input']) && !empty($_POST['user_input']))
{
	$user_input=$_POST['user_input'];
	$string_new=str_ireplace($find, $replace,$user_input);
	echo "$string_new";
}

?>

<form action="word_censoring.php" method="POST">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input;?></textarea><br><br>
	<input type="submit" name="submit">
</form>