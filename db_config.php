<!-- Data Base Connection Using PDO -->
<?php 
$host = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "practice";
$dsn = "mysql:host=$host;dbname=$dbName";
global $con;

try {	
$con = new PDO($dsn, $dbUsername,$dbPassword, array(PDO::ATTR_PERSISTENT));
	 $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 echo "Connected..";
	
}
catch (Exception $e) {

	die(json_encode(array('outcome' => false, 'message' => 'unable to connect')));	
}
?>

