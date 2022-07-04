<?php
		// Multi D Numeric Array
		/*
         $laptop = array( 
            array ("Rahul","dell",10),
            
            array ("Sonam","hp",20),
            
            array ("Sumit","zed",30)
         );
		*/
	
		$laptop[0][] = "Rahul";
		$laptop[0][] = "dell";
		$laptop[0][] = 10;
		
		$laptop[1][] = "Sonam";
		$laptop[1][] = "hp";
		$laptop[1][] = 20;
		
		$laptop[2][] = "Sumit";
		$laptop[2][] = "zed";
		$laptop[2][] = 30;
		
		echo $laptop[2][2];
 
      ?>