<?php
	class TDatabase {
		function __construct() {

			if ($this->database = mysqli_connect("localhost","root","protocolaritate","users")) {
				echo "Connected <br />";
				$sqlQuery = "SELECT * FROM users.users";
				$result = $this->multiRowQuery($sqlQuery);
				print_r($result);
		//		$sqlQuery = "SELECT * FROM users.users";
		//		$result    = $this->database->query($sqlQuery);
		//		vor fi doua valori unu cu index number si altul cu nume MYSQLI_ASSOC va selecta doar valorile pe baza de nume
		//		while($rows = mysqli_fetch_array($result)) {
		//		while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		//			print_r ($rows);
		//		}
			} else {
			echo "Could not connect\n";
		}
	}
	// Dupa ce avem conectivitate cu db, si putem rula un query si obtinem un rezultate
			function multiRowQuery($SqlQuery){
				$sqlQuery = "SELECT * FROM users.users";
				$result    = $this->database->query($sqlQuery);

				$rows = array();
		//		while($rows[] = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

		//		}
				while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$returnArray[] = $rows


		//		return $rows;
				return $returnArray;
			}
		}
