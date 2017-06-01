<!-- displaying ip address and blocking  -->

<?php  
require 'conf.php';

foreach ($ip_blocked as $ip) 
{
	if($ip==$ip_address)
	{
		die('Your ip adress:'.$ip_address.' has been blocked');
	}
}
?>

<h1>WELCOME!</h1>