<?php
	// PHP Equality == Array operator
	 $a = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	 $x = array("Rahul"=>500, "Sonam"=>600, "Sumit"=>700);
	 // $x = array("Sonam"=>600, "Rahul"=>500, "Sumit"=>700); // Order doesnt matter
	 $b = array("Rahul"=>"PHP", "Sonam"=>"Java", "Sam"=>"CSS", "JK"=>"Book");
	 if ($a == $b):
		echo "Both Array Key/Value Pair True";
	 else :
		echo "Key/Value Pair False";
	 endif;
	 
	 //echo($a == $x);

?>