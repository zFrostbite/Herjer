<?php require_once '../hidden/functions.php';
	if(isset($_POST["submit"])){
		// submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
		if($username == "kevin" && $password == "secret"){
			//success
			redirect_to("first_page.php");
		}else{

			$message = "There were some errors ";
		}
	}else{
		$username = "";
		$message = "Please log in";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Forms</title>
	</head>
	<body> 
	
		<?php echo $message;?>
		<form action="form_single.php" method="post">
		Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username);?>" /> <br />
		Password: <input type="password" name="password" value="" /> <br />
		<br />
		<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>