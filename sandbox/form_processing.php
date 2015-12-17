<?php include '../hidden/functions.php';?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Processing</title>
	</head>
	<body> 
	<pre>
	<?php 
	print_r($_POST);
	?>
	</pre>
	<br />
	<?php 
	if(isset($_POST["username"])){	
		$username = $_POST["username"];
	}else{
		$username = default_post_value("username", "");
	}
	if(isset($_POST["password"])){		
	$password = $_POST["password"];
	}else{
		$password = default_post_value("password", "");
	}
	echo "{$username}: {$password}";
	?>
	
	<?php 
	$username = isset($_POST["username"]) ? $_POST["username"] : "";
	$password = isset($_POST["password"]) ? $_POST["password"] : "";
	?>
	<br />
	<?php 
	if(isset($_POST["submit"])){
		echo "Jeh";
	}
	
	?>
	</body>
</html>