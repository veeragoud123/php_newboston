<!-- string replace -->
<?php
	$string='This is a string and is an example';
	$string_new=str_replace('is','sss', $string);
	echo 'Before replacing string:'."<br>";
	echo "$string<br>";
	echo 'After replacing string:'."<br>";
	echo "$string_new<br>";
?>

<?php
echo "--------------using arrays---------------<br>";
$string='This is a string and is an example';
$find=array('is','string','example');
$replace=array('IS','STRING','EXAMPLE');

$string_new=str_replace($find, $replace, $string);

echo $string_new;
?>