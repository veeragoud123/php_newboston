<?php 
$http_client_ip=$_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];
$http_remote=$_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip))
{
	$ip_address=$http_client_ip;
}elseif (!empty($http_x_forwarded_for)) {
	$ip_address=$http_x_forwarded_for;
}else{
	$ip_address=$http_remote;
}
echo $ip_address;
?>