<!-- file appending -->
<?php
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	if(!empty($name))
	{
		$handle=fopen("names.txt",'a');
		fwrite($handle, $name."\n");
		fclose($handle);
	}
	else
	{
		echo "Please type name!";
	}
}

?>

<form action="file_appending.php" method="POST">
	Name:<input type="text" name="name">
	<input type="submit" name="submit">
</form>