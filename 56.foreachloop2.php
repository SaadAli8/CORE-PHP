<?php
	// foreach with numeric array
	// $name = array("Rahul", "Sonam", "Sumit", "Priti");
	$name[0] = "Rahul";
	$name[1] = "Sonam";
	$name[2] = "Sumit";
	$name[3] = "Priti";
	foreach($name as $key=>$value)
	{
		echo $key . " " . $value . "<br />";
	}
	/*
	foreach($name as $key=>$value) :
		echo $key . " " . $value . "<br />";
	endforeach;
	*/
?>