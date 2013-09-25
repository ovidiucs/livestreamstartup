<?php
	class TDatabase {
		function __construct() {

			if ($this->database = mysqli_connect("localhost","root","protocolaritate","users")) {
				echo "Connected <br />";
				$sqlQuery = "SELECT * FROM users.users";
					$result = $this->multiRowQuery($sqlQuery);
				print_r($result);
			} else {
			echo "Could not connect\n";
		}
	}

			function multiRowQuery($sqlQuery){
				$sqlQuery = "SELECT * FROM users.users";
				$result    = $this->database->query($sqlQuery);

				$rows = array();

				while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$returnArray[] = $rows;
			}
				return $returnArray;
		}
			function singleRowQuery($sqlQuery){
				$result = $this->database->query($sqlQuery);

				$rows = array();
				while ($rows = mysqli_fetch_array($result, MYSQL_ASSOC)) {
					return $rows;
				}

				//Ceva s-a intamplat
				return 0;
			}

	}

//	singleRowQuery returneaza:
//	 (
//		 [username] => carl
//		 [password] => 123
//	 )
//
//	multiRowQuery returneaza:
//	(
//		 [0] => Array
//			 (
//		 [username] => carl
//		 [password] => 123
//	   )
//		 [1] => Array
//		  (
//		 [username] => carl2
//		 [password] => 321
//	   )
//	) 
