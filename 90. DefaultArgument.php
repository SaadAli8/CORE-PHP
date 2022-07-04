<?php
	/* Wrong Syntax
		function display($name1, $name2="Your", $name3)
		it will run only if you pass all three arguments
		
	*/
	// function display($name1, $name2="Your", $name3="Geekyshows");
	function display ($name1, $name2, $name3="GeekyShows")
	{
      echo "$name1 to $name2 $name3 <br />";
	}

	display("Welcome", "Your");		// Welcome to Your Geekyshows
	display("Welcome", "Your", "PHP")	// Welcome to Your PHP
	display("Welcome");

?>