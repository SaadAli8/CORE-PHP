<?php
	$fees = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	
	$keys = array_keys($fees, 500);
	
	for($i=0; $i<=2; $i++) 	// for($i=0; $i<count($keys); $i++)
	{	
		echo $keys[$i] . "<br />";
	}


?>