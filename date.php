<?php
	date_default_timezone_set('UTC');	
	echo date("Y d M");
	$dateobj = new DateTime();
	echo "[ Object date : ".$dateobj->date . " ] ";
	var_dump(new DateTime());
?>
