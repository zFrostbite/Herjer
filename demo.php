<?php
require_once 'hidden/connect_mysql.php';

$value = $_POST['input1'];
$query1 = "SELECT * FROM demo";

$result = mysqli_query($conn, $query1);

while ($row = mysqli_fetch_object($result)) {
	echo $row->input1, '<br/>';
}

$query  = "INSERT INTO demo (input1) VALUES ('$value')";
		
if(!mysqli_query($conn, $query)){
	die('Da gikk isje');
}

?>