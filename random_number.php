<!-- Random Numaber -->
<!-- <?php
//$rand=rand(); // generates random number
//$max=getrandmax(); //this function used to get rand max value
//echo "$rand / $max";
?> -->


<?php  
if(isset($_POST['roll']))
{
	$rand=rand(1,10);
	echo "You rolled a rand: $rand";
}
?>

<form action="random_number.php" method="POST">
	<input type="submit" name="roll" value="roll dice">	
</form>