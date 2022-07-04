<?php
		$name = 546;
		/* Single quote is said to be literal. It doesn’t parse the data. 
			Double quote is said to be interpreted. */

		echo "$name <br />";
		echo '$name <br />';
		
		echo 'I am "PHP" <br />';    //Wrong Statement -  echo 'I am 'PHP' <br />';
		echo "I am 'PHP'";  		// Wrong Statement - echo "I am "PHP"";
		
		echo "I am \"PHP\" <br />";
		echo 'I am \'PHP\' ';
		
		
		
		
?>