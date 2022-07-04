<?php
	
	$a = 10; // Global Variable
	function display() 
	{
		// below code wont work, can’t access $a inside function
		// echo "Accessing Value Inside Function = $a <br />";
	} 
	
	display();

	echo "Accessing Value outside Function = $a <br />";
?>