<?php
	// while loop with associative array
	$fees = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	
	$keys = array_keys($fees);
	$i = 0;	
	while($i<count($keys))
	{
		echo $keys[$i] ." = " . $fees[$keys[$i]] . "<br />";
		$i++;
	}
	
	/*
	while($i<count($keys)) :
		echo $keys[$i] ." = " . $fees[$keys[$i]] . "<br />";
		$i++;
	endwhile;
	*/


?>