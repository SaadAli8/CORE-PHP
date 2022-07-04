<?php
	// Argument Swapping or Specifie Placeholder or Position Specifier
	$a = 2;
	$b = 45;
	$c = 20;
	$d = 87;
	
// printf("There are %1\$d laptops %2\$d mouses %3\$d mics %4\$d mobiles", $a, $b, $c, $d);
printf("There are %1\$d laptops %1\$d mouses %2\$d mics %1\$d mobiles", $a, $b);

	
?>