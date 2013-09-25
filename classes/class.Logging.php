<?php
	// Logging Class
	class TLogging {
		function __construct() {
			echo "Logging Class Called<br />";
			 $logfile = '../logs/test.txt';

			 if ($fp = fopen('../logs/test.txt','a+')){
				 fwrite($fp,"Testing\n");
				 fclose($fp);
			 } else {
				 echo "Could Not Write to File<br />";
		}
	}
}
