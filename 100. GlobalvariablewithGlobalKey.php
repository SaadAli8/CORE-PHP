<?php
	
	$a = 10; 	// global variable
	function display() 
	{
		global $a; 	// defining its global
		echo "Accessing Value Inside Function = $a <br />";
	} 
	
	display();

	echo "Accessing Value outside Function = $a <br />";
?>