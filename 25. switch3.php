<?php
	$day = "Mon";
	switch ($day) :
		case "Mon" :
		case "mon" :
			echo "C Programming" ;
			break;
			
		case "Tue" :
			echo "C++ Programming" ;
			break;
		
		case "Sun" :
			echo "Holiday" ;
			break;
		
		default :
			echo "No Exams" ;
	endswitch;
?>