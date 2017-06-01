<!-- while_loop -->
<?php 
	echo ' while loop: print 1 to 10 numbers';
	$num=1;
	while ($num <= 10) {
		echo "$num<br>";
		$num++;
	}
?>


<?php 
	echo ' do-while loop: print 1 to 10 numbers<br>';
	$num=11;
	do {
		echo "$num<br>";
		$num++;
	}while ($num <= 10);
?>