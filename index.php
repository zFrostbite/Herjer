<?php	require_once("hidden/connect_mysql.php");
		require_once("hidden/functions.php"); 
error_reporting(0);
echo "<br/>"; 
 
/*if($result = $conn->query("SELECT * FROM brukere")) {
	if($count = $result->num_rows) {
		echo '<p>', $count, '</p>';

		
		<?php 
			$result = $conn->query("SELECT * FROM brukere");
			while ($row = mysqli_fetch_object($result)) {
			echo $row->id, ' ', $row->fornavn, ' ', $row->etternavn, '<br/>';
		}
		?>

		} 

	} */


?>
<!doctype HTML>
<html>
	<head> 
		<title>Herjer MMA</title>
	</head>
	
	<body>
	
		<h1>Folk herane</h1>
		<form action="demo.php" method="post" >
		<p>Input 1: <input type="text" name="input1"/> </p>
		<input type="submit" value="Submit" />
		</form>
		<?php 
		$query1 = "SELECT * FROM demo";
		
		$result = mysqli_query($conn, $query1);
			while ($row = mysqli_fetch_object($result)) {
			echo $row->input1, '<br/>';
		}
		?>
	</body>
</html>