<?php
	// Clasa pentru parsarea URI-urilor
	class TParseURI{
		function __construct($uri) {

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
