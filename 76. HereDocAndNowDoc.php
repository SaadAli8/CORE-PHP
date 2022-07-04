<?php
		$number = 546;
		// Here Doc
		echo <<< MYDATA
	    Welcome to Geeky Shows
        It is very “important” data $number
MYDATA;

		// Now Doc
		echo <<< 'MYDATA'
		Welcome to Geeky Shows
		It is very 'Important' data $number
MYDATA;


?>