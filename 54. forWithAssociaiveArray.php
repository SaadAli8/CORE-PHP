<?php
	$fees = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	
	$keys = array_keys($fees); 
	
	for($i=0; $i<count($keys); $i++) 
	{
		echo $keys[$i] ." = " . $fees[$keys[$i]] . "<br />";
	}


?>