<?php
	// Returning Reference 
	$n = 2;
	echo "Value of n = $n <br />"; 
	function &add(&$a)	
	{
		return $a;	
	}
	$ref = &add($n);
	$ref++;
	echo "Value of n = $n <br />"; 
	echo "Value of ref = $ref <br />";

?>