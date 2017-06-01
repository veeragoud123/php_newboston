<!-- for loop -->
<?php 
	$str='abcd';
	$len=strlen($str);
	for($i=$len;$i>=0;$i--)
	{
		echo $str[$i];
		$rev=$str[$i];
	}
?>