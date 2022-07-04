<?php
	$marks = array(10, 20, 30, 40);	// defining array
	function total($subject)		// Array Parameter 
	{
		$sum = 0;
		foreach($subject as $num)
		{
			$sum = $sum + $num;
		}
		return $sum;
	}
	echo total($marks);		// Passing Array marks

?>