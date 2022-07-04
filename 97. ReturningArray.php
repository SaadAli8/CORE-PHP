<?php
	// returning array from function
	function mathop($num1, $num2)
	{
		$sum = $num1 + $num2;	// 50 + 10 = 60
		$sub = $num1 - $num2;	// 50 - 10 = 40
		$mul = $num1 * $num2;	// 50 * 10 = 500
		$div = $num1 / $num2;	// 50 / 10 = 5
		
		$solution = array($sum, $sub, $mul, $div);
		
		return $solution;
	}
	
	$arthop = mathop(50, 10); // $arthop = array($sum, $sub, $mul, $div)
	echo $arthop[0];	// echo mathop(50, 10) it wont work 
	echo "Sum = " . $arthop[0] . "<br />";
	echo "Sub = " . $arthop[1] . "<br />";
	echo "Mul = " . $arthop[2] . "<br />";
	echo "Div = " . $arthop[3] . "<br />";
?>