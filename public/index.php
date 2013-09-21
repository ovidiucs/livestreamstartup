<?php
// Controller
// [1]
// To be able to use sessions we need to use session_start to have access to the global variable
// $_SESSION that can determine if a user is logged in or not.
// if the user is loggedin then say they are
// else say they are not and also set the loggin flag to 1 

	require_once("../classes/class.Authentication.php");
	require_once("../classes/class.Session.php");
	$Authentication = new TAuthentication();
	$Session 		= new TSession();
//  Once we add classes in the mix we can exclude session_start()	
//	session_start();
	$_SESSION['loggedin'] = 0;

//	$_SESSION['test'] = 'This is a test';
//	if ($_SESSION['loggedin'] == 1) {
//		// Logged In
//		echo "You are logged in";
//	} else {
//		//Not logged in
//		echo "You are not logged in";
//		$_SESSION['loggedin'] = 1;
//	
//	}

	if ($_SESSION['loggedin'] == 1) {
		// Logged In
		echo "You are logged in";
	} else {
		// Test if the user has submitted a form
		if ($_POST['submit'] == "Submit") {
			// if the user is ovidiu and the password is 123
				if ($_POST['username'] == 'ovidiu' && $_POST['password'] == '123') {
					echo 'Logged in'; 
					// and set $_SESSION logged in to 1
					$_SESSION['loggedin'] = 1;
				} else {
					// otherwise set $_SESSION['loggedin'] to 0
					echo 'Login Failed';
					$_SESSION['loggedin'] = 0;
				}
			// print_r($_POST);
			// They submitted the login form
		} else {

		}
		//Not logged in
		$content = file_get_contents("../templates/loginform.html");
		echo $content;
		//$_SESSION['loggedin'] = 1;
	
	}
		die;
// If the requested URI is not / then execute a regular expression that will get
// whatever is after /name/ and set it as the first element of the array and store it to pmatches variable
// the content variable will hold the result of file_get_contents which grabs the entire content of the file 
// then the str_replace will replace the content {text} with Hello , and the first element of the array pmatches
// and this text will become accesible when you echo $content
	if ($_SERVER['REQUEST_URI'] != '/') {
		preg_match('!name/([a-z]+)!imsx', $_SERVER['REQUEST_URI'],$pmatches);
		// HOMEPAGE
		$content = file_get_contents("../templates/index.html");
		$content = str_replace  ("{text}",'Hello , '.$pmatches[1], $content);
		echo $content;
	} else {
		echo 'You are on the homepage';
		// NOT HOMEPAGE
	}




