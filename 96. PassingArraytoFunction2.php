<?php
	$marks = array(10, 20, 20);	// defining array
	function total($subject = array(10, 20, 30, 40)) // default argument 
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