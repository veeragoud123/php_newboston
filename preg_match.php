<!-- preg match -->
<?php 
	function has_space($string)
	{
		if(preg_match('/ /',$string))
		{
			return true;
		}
		else
			return false;
	}

$string='String does not has any space';

if(has_space($string))
{
	echo "String has at least one space";
}
else
{
	echo "String has no space";
}


?>
