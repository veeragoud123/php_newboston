<!-- Get Variables -->
<?php  
if(isset($_GET['day'])&&isset($_GET['month'])&&isset($_GET['year']))
{
	$day=$_GET['day'];
	$month=$_GET['month'];
	$year=$_GET['year'];
	if (!empty($day)&& !empty($month)&&!empty($year)) {
		echo "Todays day is $day and month is $month and year is $year";
	}else{
		echo "Please fill all the fields";
	}
}
?>

<form action="get_variables.php" method="GET">
	Day:<input type="text" name="day"><br><br>
	Month:<input type="text" name="month"><br><br>
	Year:<input type="text" name="year"><br><br>
	<input type="submit" name="submit" value="submit">
</form>