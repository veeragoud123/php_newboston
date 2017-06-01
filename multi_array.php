<!-- multi dimensional array -->
<?php 

$food= array('Healthy'=>
	          array('Vegetables','Fruits','Milk'),
		     'Unhealthy'=>
		      array('non veg','pizza','ice cream'));

foreach ($food as $elements=>$inner_array) 
{
	echo "<strong>$elements</strong>".'<br>';
	foreach ($inner_array as $value) 
	{
		echo $value.'<br>';
	}
}
?>
