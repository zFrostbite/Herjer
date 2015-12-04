<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>First page</title>
	</head>
	<body>
	<?php $link_name = "Second_page.php"; 
	$id = 7;
	$company = "Johnson & Johnson";
	?>
	
	<a href="<?php echo $link_name?>?id=<?php echo $id;?>&company=<?php echo rawurlencode($company);?>"> <?php echo $link_name?></a>
	
	</body>
</html>