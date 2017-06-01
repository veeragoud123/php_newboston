<!-- post variable -->
<?php
$match='password123';  
if(isset($_POST['password']))
{
	$password=$_POST['password'];
	if(!empty($password))
	{
		if($password==$match)
		{
			echo "Password is correct!";
		}
		else
		{
			echo "Incorrect password!!!";
		}
	}
	else
	{
		echo "Password is empty, please enter correct password!!";
	}
}
?>

<form action="post_variable.php" method="POST">
	Password:<input type="Password" name="password">
	<input type="submit" name="submit">

</form>