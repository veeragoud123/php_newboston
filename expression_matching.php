<!-- expression matching -->
<?php
$string="This is a string";

if(preg_match('/ is a /', $string))
{
	echo "match found";
}
else 
{
	echo "no match found";
}
?>