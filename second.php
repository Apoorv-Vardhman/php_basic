<?php 
	// make a php webpage for your self 
	$first_name = "Apoorv";
	$last_name = "Vardhman";
	$profession = "Plumber";
	$salary = 500;
?>
<html>
	<head>
		<title>About MySelf | <?php echo $first_name; ?></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<style>
			.name{
				color: #d31d1d;
			}
		</style>
	</head>
	<body>
		<h1>Personal Information</h1>
		<?php 
			echo "<h2 class='text-danger'>My Name is $first_name $last_name.</h2><h3>I am a $profession.My salary is $salary</h3>";
		?>
		
		
		
	</body>
</html>