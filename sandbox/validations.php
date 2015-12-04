<!DOCTYPE html>
<html>
	<head>
		<title>Forms</title>
	</head>
	<body> 

	<?php 	
	
	// Presence
	$value = "x";
	if(!isset($value) || empty($value)){
		echo "Failed validation. <br />";
	}
	// String length
	//Minimum herane
	$min = 3;
	$max = 5;
	$value = "dsddd";
	if(strlen($value) < $min) {
		echo "Validation failed. <br />";
	}
	//Max length
	if(strlen($value) > $max) {
		echo "Validation failed. <br />";
	}
	// Type
	$value = "1";
	if(!is_string($value)) {
		echo "Validation failed. <br />";
	}
	// Inclusion in a set
	$value = 4;
	$set = array("1", "2", "3", "4");
	if(!in_array($value, $set)){
		echo "Validation failed.<br />";
	}
	
	// Unique?
	//Database uniqueness
	
	// Format
	if(preg_match("/PHP/", "PHP is fun")){
		echo "Found.<br />";
	}else{
		echo "Not found. <br />";
	}
	$value = "nobod@ynobody.com";
	if(preg_match("/@/", $value)){
		echo "Validation OK.<br />";
	}
	if(strpos($value, "@") === false) {
		echo "Validation error <br />";
	}
	?>
	</body>
</html>