<?php
	// PHP Identity === Array operator
	 $a = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	 $x = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	 // $x = array("Sonam"=>600, "Rahul"=>500, "Sumit"=>700); // Order matter
	 $b = array("Rahul"=>"PHP", "Sonam"=>"Java", "Sam"=>"CSS", "JK"=>"Book");
	 if ($a === $x):
		echo "Both Array Key/Value Pair True";
	 else :
		echo "Key/Value Pair False";
	 endif;

?>