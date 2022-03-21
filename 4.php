<?php 
	function increaseValue()
	{
		static $num = 1;
		$num++;
		echo "$num <br>";
	}
	increaseValue();
	increaseValue();
	increaseValue();
?>