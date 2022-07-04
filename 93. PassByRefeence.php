<?php
	// Pass by Reference 
	$n = 2;
	echo "Value of n = $n <br />"; 
	function add(&$a)	// $a = $n = 2
	{
		$a = 4;			// $a = $n = 4
	}
	add($n);	// after calling $n = 4;
	
	echo "Value of n = $n <br />"; 

?>