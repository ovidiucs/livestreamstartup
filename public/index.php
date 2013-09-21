<?php
// Controller

	require_once("../classes/class.Authentication.php");
	require_once("../classes/class.Session.php");

	$Session 		= new TSession();
	$Authentication = new TAuthentication();

	$ControllerVars['loggedin'] = 0;

	if ($Authentication->isAuthorized()) {

		$ControllerVars['loggedin'] = 1;

	} else {
		
		if ($_POST['submit'] == "Submit") {
		
			if ($Authentication->checkUserPass()) {
				$ControllerVars['loggedin'] = 1;
		
				$Authentication->succesfulLogin();
		
			} else {
				$Authentication->failedLogin();
			}
		}
	}
			echo "Login status is: ".$ControllerVars['loggedin'];
		if ($ControllerVars['loggedin'] == 0) {
			// Not logged in
			$content = file_get_contents("../templates/loginform.html");
			echo $content;
	}
		die;

	if ($_SERVER['REQUEST_URI'] != '/') {
		preg_match('!name/([a-z]+)!imsx', $_SERVER['REQUEST_URI'],$pmatches);
		$content = file_get_contents("../templates/index.html");
		$content = str_replace  ("{text}",'Hello , '.$pmatches[1], $content);
		echo $content;
	} else {
		echo 'You are on the homepage';
	}


