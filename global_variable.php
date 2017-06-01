<!-- global variable -->
<?php  
$user_ip=$_SERVER['REMOTE_ADDR'];

function userip()
{
	global $user_ip;
	$str="Your ip address is: $user_ip";
	echo $str; 
}
userip();

?>
