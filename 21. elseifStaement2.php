<?php
	$price = 10;
	if ($price > 40) :
		echo "If Condition is True <br />";
		
	elseif ($price > 30) :
		echo "1st Else If Condition is True <br />";

	elseif ($price > 20) :
		echo "2nd Else If Condition is True <br />";
	
	else :
		echo "All Conditions are False <br />";
	endif;
	
	echo "Rest of the code";
?>