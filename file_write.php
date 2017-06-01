<?php
	$handle=fopen("names.txt","w") or die("unable to open file!");
	
	fwrite($handle, 'alex'."\n");
	fwrite($handle, 'alen');

	fclose($handle);
	echo "Written..";
?>