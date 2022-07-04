<?php
	if (10>2):
		echo "Main 1 <br />";
		if (10> 5):
			echo "Nested Code excuted 1 <br />";
		endif;
		if (20> 5):
			echo "Nested Code excuted 2 <br />";
		endif;
	endif;
	
	if (10> 5):
			echo "Main 2<br />";
	endif;
	
	echo "Rest of the code";
?>