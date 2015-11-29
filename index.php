<?php	require_once("hidden/connect_mysql.php");
		require_once("hidden/functions.php"); 
error_reporting(0);
echo "<br/>"; 
 
if($result = $conn->query("SELECT * FROM brukere")) {
	if($count = $result->num_rows) {
		echo '<p>', $count, '</p>';

		
		
		while($row = $result->fetch_object()) {
			echo $row->fornavn, ' ', $row->etternavn, '<br>';
		}
		$result->free();
	}
}



?>
<!doctype HTML>
<html>
	<head> 
	
	</head>
	
	<body>
	
	</body>
</html>