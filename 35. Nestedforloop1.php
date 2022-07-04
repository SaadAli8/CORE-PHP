<?php
	for($num = 1; $num<= 2; $num++)
	{
		echo "<b>Outer Loop: $num </b><br />";
		for($val = 1; $val <=3; $val++)
		{
			echo "Inner Loop: $val <br />";
		}
	}
?>