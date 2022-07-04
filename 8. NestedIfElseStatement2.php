<?php
	if (10<2) :
		echo "Main Condition is True <br />";
		if (10> 5):
			echo "Nested Condition True<br />";
		else :
			echo "Nested Condition False <br />";
		endif;
	
	else :
		echo "Main Condition is False <br />";
	endif;
	
	echo "Rest of the code";
?>