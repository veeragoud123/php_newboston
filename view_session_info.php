<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['age']))
{
	echo 'Welcome, '.$_SESSION['name'].' '.'your are'.' '.$_SESSION['age'];
}
else
{
	echo "Please log in";
}
?>