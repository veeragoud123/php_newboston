<!-- str function upper/lowercase  -->
<?php 
	if(isset($_GET['user_name']) && !empty($_GET['user_name']))
	{
		$user_name=$_GET['user_name'];
		$user_name_lc=strtolower($user_name);
		echo "You are the best $user_name.<br>";
	}

?>

<form action="str_upper_lowercase.php" method="GET">
Name:<input type="text" name="user_name">
	 <input type="submit" value="submit">	
</form>