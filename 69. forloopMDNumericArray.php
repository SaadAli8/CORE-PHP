<?php
		// Multi D Numeric Array Access using for loop
		/*
         $laptop = array( 
            array ("Rahul","dell",10),
            
            array ("Sonam","hp",20),
            
            array ("Sumit","zed",30)
         );
		*/
	
		$laptop[0][0] = "Rahul";
		$laptop[0][1] = "dell";
		$laptop[0][2] = 10;
		
		$laptop[1][0] = "Sonam";
		$laptop[1][1] = "hp";
		$laptop[1][2] = 20;
		
		$laptop[2][0] = "Sumit";
		$laptop[2][1] = "zed";
		$laptop[2][2] = 30;
		
		for($i=0; $i<count($laptop); $i++)
		{
			for($j=0; $j<count($laptop[$i]); $j++)
			{
				echo $laptop[$i][$j] . " ";
			}
			echo "<br />";
		}
 
      ?>