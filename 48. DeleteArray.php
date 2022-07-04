<?php
	$name [0] = "Rahul";
	$name [1] = "Sonam";
	$name [2] = "Sumit";
	$name [3] = "Priti";
	echo $name[2] . "<br />";
	unset($name [2]);		// wont work $name [2] = " ";
	echo $name[2];
?>