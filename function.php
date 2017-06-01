<!--Basic functions in php-->
<?php 
	function DisplayName()
	{
		$name='Veera';
		echo $name;
	}

	echo "My name is".' ';
	DisplayName();
	echo "<br>";
?>


<!--functions with args in php-->
<?php 
	function name($num1,$num2)
	{
		$sum=$num1+$num2;
		echo "$sum";
	}

	echo "Sum of two number is:".' ';
	name(10,30);
	echo "<br>";
?>

<!--functions with args and return value in php-->
<?php 
	
	function sub($num1,$num2)
	{
		$res=$num1-$num2;
		return $res;
	}

	function add($num1,$num2)
	{
		$res=$num1+$num2;
		return $res;
	}
	echo "After subtraction".' ';
	echo sub(100,10);
	echo "<br>";
	echo "After Addition".' ';
	echo add(10,10);
	echo "<br>";
	echo "function inside another function<br>";
	$sum=add(add(10,10),add(10,10));
	echo $sum;
?>