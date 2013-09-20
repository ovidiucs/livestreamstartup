<?php
// Controller
// 1. What URL are they trying to access:

//echo $_SERVER['REQUEST_URI'];
// 2. If user is on the homepage ($_SERVER returns '/') then echo the proper message else say otherwise
	if ($_SERVER['REQUEST_URI'] == '/') {
		// HOMEPAGE
		// Get the homepage from a file
//		echo file_get_contents("../templates/index.html");
		// Or print a message 
//		 echo 'You are on the homepage';
		// or str_replace to put in content in the html placeholders
		$content = file_get_contents("../templates/index.dyn");
		$content = str_replace  ("{text}","Replaced text", $content);
		echo $content;
	} else {
		echo 'You are not on the homepage';
		// NOT HOMEPAGE
	}




