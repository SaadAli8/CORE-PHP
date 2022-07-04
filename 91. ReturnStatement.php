<?php
	function add($a, $b)
	{
		$sum = $a + $b;
		return($sum);	// return($a + $b);
	}
	$total = add(2, 4);
	echo "Total = $total";  // echo add(2, 4);

?>