<?php
	//Database connection info
$address 	= "127.0.0.1";
$user		= "root";
$password	= "";
$db 		= "herjermasma";

// Tilkobling
$conn = new mysqli($address, $user, $password, $db);

if($conn->connect_errno){
	echo "Tilkobling mislyktes. Kontakt systemansvarlig. <br/> ERRNO " . $conn->connect_errno . ": " .
			$conn->connect_error;
}

?>