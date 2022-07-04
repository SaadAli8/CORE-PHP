<?php
	
	function display() 
	{
		$a = 10; // Local Variable
		echo "Accessing Value Inside Function = $a <br />";
	} 
	
	display();
	
	// below code will not work can’t access $a outside function
	// echo "Accessing Value outside Function = $a <br />";
?>