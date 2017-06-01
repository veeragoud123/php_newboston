<!-- Associative Array -->
<?php 
	$cart=array('laptop'=>10000,'pendrive'=>400,'router'=>1000,'lan'=>200,'mac'=>75000);
	//print_r($cart);
	foreach ($cart as $key => $value) {
		echo "$key".' '."$value".' '."<br>";
	}
?>