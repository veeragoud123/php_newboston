<!-- switch case -->
<?php
$case1=3;
switch ($case1) {
	case 1:
	echo "one";
		# code..
		break;
	case 2:
	 echo "two";
		# code...
		break;
	default:
		echo "number not found<br>";
		break;
}

?>


<!-- String -->
<?php
$case="sunday";
switch ($case) {
	case "saturday":
	case "sunday":
	echo "Its weekend!!!";
		break;
	default:
		echo "not a weekend";
		break;
}

?>
