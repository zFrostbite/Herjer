<?php
$servername 	= "127.0.0.1";
$password 		= "";
$user			= "root";
$db				= "HerjerMMA";

// Kobla te MySQL DB
$conn = new mysqli($servername, $user, $password, $db);

// Sjekk_
if($conn->connect_error) {
	die("Tilkobling til MySQL database ikke vellykket <br/>" . "ERRNO: " . $conn->connect_errno ."<br/> " . $conn->connect_error);
}

echo("Tilkobling vellykket. MySQL AKTIV! Tilkoblet: " .$db);
?>