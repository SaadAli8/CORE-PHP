<?php
	// Pass by value
	$n = 2;
	echo "Value of n = $n <br />"; 
	function add($a)	// $a = $n = 2 Here n is duplicate n (copy of n)
	{
		$a = 4;			// $a = 4
	}
	add($n);		// $n = 2
	
	echo "Value of n = $n <br />"; 

?>