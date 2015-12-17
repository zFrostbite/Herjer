
<!DOCTYPE html>     
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>False Positives</title>
	</head>
	<body>
	<?php 
	
	function is_equal($value1, $value2){
		$output = "{$value1} == {$value2}: ";
		if($value1 == $value2){
			$output .= "True.<br/>";
		}else{
			$output .= "False.<br/>";
		}
		return $output;
	}
	
	
	?>
	</body>
</html>