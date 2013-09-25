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

			function multiRowQuery($SqlQuery){
				$sqlQuery = "SELECT * FROM users.users";
				$result    = $this->database->query($sqlQuery);

				$rows = array();

				while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$returnArray[] = $rows;
			}
				return $returnArray;
		}
	}
