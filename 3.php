<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		// php support two types of comment 
		// one is single line comment 
		/*
			this is multi line comment 
		*/

		/*
			php variables rules
			1. starts with $ sign 
			2. start with letter or underscore
			3. contain alphanumeric character and underscore (A-Z a-z and _)
			4. variables are case sensitive 
		*/
		$num1 = 10;
		$num2 = 20;
		sum();
		// php is a loosly typed language 
		/*
			PHP variable Scope 
			In php variable can be declared anywhere in the script 
			There are three different variable scope
			Local
			Global 
			Static 
			1.	Local 
			Local variable is define in a function which scope is available within the function 

		*/
		// variable scope 
		function sum()
		{
			// global $num1,$num2;
			// php stores all global variables in array called $GLOBALS[]
			$sum = $GLOBALS['num1'] + $GLOBALS['num2'];
			echo $sum;
		}

		

	?>
</body>
</html>