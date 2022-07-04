<?php
		// Multi D Associative Array
		/*
         $fees = array( 
            "Rahul" => array ("php" => 10, "java" => 20, "css" => 30),
            
            "Sonam" => array ("php" => 30, "java" => 40, "css" => 10),
            
            "Sumit" => array ("php" => 50, "java" => 60, "css" => 40)
         );
		*/
	
		$fees["Rahul"]["php"] = 10;
		$fees["Rahul"]["java"] = 20;
		$fees["Rahul"]["css"] = 30;
		
		$fees["Sonam"]["php"] = 30;
		$fees["Sonam"]["java"] = 40;
		$fees["Sonam"]["css"] = 10;
		
		$fees["Sumit"]["php"] = 50;
		$fees["Sumit"]["java"] = 60;
		$fees["Sumit"]["css"] = 40;
		
		echo $fees["Rahul"]["java"];
 
      ?>