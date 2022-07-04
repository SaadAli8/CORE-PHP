<?php
	// foreach with associative array
	
	$fees = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	foreach($fees as $value)	// here $value is a variable
	{
		echo $value . "<br />";
	}
	
	/*
	foreach($fees as $value) :
		echo $value . "<br />";
	endforeach;
	*/


?>