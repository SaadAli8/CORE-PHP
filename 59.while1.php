<?php
	// while loop with numeric array
	$name = array("Rahul", "Sonam", "Sumit", "Priti");
	$i = 0;
	while($i<count($name))
	{
		echo "\$name[$i] = ",$name[$i], "<br />";
		$i++;
	}
	
	/* 
	while($i<count($name)) :
		echo "\$name[$i] = ",$name[$i], "<br />";
		$i++;
	endwhile;
	*/
?>