<!-- Logical Operators -->
<?php
	$number=100;
	$upper=1000;
	$lower=10;
//logical AND
	echo"-------Logical AND--------<br>";
	if($number>=$lower && $upper>=$number)
	{
		echo "$number is greater than $lower and $upper is greater than $number"."<br>";
	}
	else
	{
		echo "condition is false"."<br>";
	}
?>
<?php
	$number=10000;
	$upper=1000;
	$lower=10;

	echo"-------Logical OR--------<br>";
//Logical OR
	if($number<=$upper || $upper<=$number)
	{
		echo "$number is greater than $lower and $upper is greater than $number<br>";
	}
	else
	{
		echo "condition is false<br>";
	}
?>

<?php
	$number=10000;
	$upper=1000;
	$lower=10;

	echo"-------Logical NOT--------<br>";
//Logical NOT
	if(!$number<=$upper)
	{
		echo "true<br>";
	}
	else
	{
		echo "false<br>";
	}
?>