<?php
	// Clasa pentru parsarea URI-urilor
	class TParseURI{
		function __construct($uri) {
            preg_match("!^/([^/]+)!imsx",$uri,$pmatches);
		//	Array
		//		(
		//		     [0] => /jjjjj
		//		     [1] => jjjjj
		//		)
		// exact name of the page and the URI		
			
			$className = $pmatches[0];
			echo "Page name: ".$className."<br />";
		// Securitate
	   		if(strlen($className) > 32) {
				// TODO:Logging Message
				die("Unexpected Error");
			}
		// unexpected input or very large input can create buffer overflows
			$className = preg_replace("![^a-z0-9]!imsx","",$className);
		// preg_replace - daca nu are 09az  in nume page nu ne intereseaza
			echo "Class Name: ".$className."<br />";

			$this->pageName = '';
			// Paseaza URI la construct si verifica posibilitati
				echo $uri."<br />";
			// Root URL			: http://www.dev.bitsto.net/
			if ($uri == '/') {
				$this->pageName = 'root';
			}
			// /signup 			: http://www.dev.bitsto.net/signup
			if ($uri == '/signup') {
				$this->pageName = 'signup';
			}
			// /login			: http://www.dev.bitsto.net/login
			if ($uri == '/login') {
				$this->pageName = 'login';
			}

		}
		// nu vrem ca functia constructor sa returneze am dori o functie
		// ca sa faca asta
		function getPageName(){
			return $this->pageName;
		}
	}
