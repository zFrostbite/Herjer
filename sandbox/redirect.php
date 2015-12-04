<?php 
	function redirect_to($new_location) {
		header("Location: " .$new_location );
	}
	
	$logged_in = $_GET['logged_in'];
	if($logged_in == "1") {
		redirect_to("first_page.php");
	}else{
		redirect_to("second_page.php");
	}
?>
<!DOCTYPE html>     
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Redirect</title>
	</head>
	<body>
	
	</body>
</html>