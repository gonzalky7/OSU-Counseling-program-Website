<?php 
	include("../includes/db_connect.php");

		/*The clients class will incapsulate our CRUD operations
		 *as well as store some of the data.
	 	*/
	class Client {
	 	public $ID;
	 	public $first_name;
	 	public $last_name;
	 	public $age;
	 	public $birthday;

	 	public function __construct(){
	 		$this->first_name = NULL;
	 		$this->last_name = NULL;
	 		$this->age = NULL;
	 		$this->birthday = NULL;
	 	}

	 	public function __construct($first, $last, $age, $bday){
	 		$this->first_name = $first;
	 		$this->last_name = $last;
	 		$this->age = $age;
	 		$this->birthday = $bday;
	 	}

	 	public function saveClientInfo() {
	 		global $db;
			
			//Escapes out of special characters
			$this->first_name = $db->real_escape_string($this->first_name);
			$this->last_name = $db->real_escape_string($this->last_name);
			$this->age = $db->real_escape_string($this->age);
			$this->birthday = $db->real_escape_string($this->birthday);
			
	 		//Create the query to save the client
	 		$save_query = "INSERT INTO clients (id, first_name, last_name, age, date_of_birth) VALUES ('{$this->first_name}', '{$this->last_name}', '{$this->age}', '{$this->birthday}')";

	 		//check to make sure it worked
	 		if(mysqli_query($db, $save_query)) {
	 			return true;
	 		} 	else {
	 				return false;
	 			}
	 	}

	 	public function deleteClient() {
	 		global $db;

	 		//get the id to be deleted
	 		$idToDelete = $_GET["id"];

	 		//create a query
	 		$delete_query = $db->query("DELETE FROM clients WHERE id = $idToDelete");

	 		//test to see if it was successful
	 		if($delete_query) {
	 			return true;
	 		} 	else {
	 				return false;
	 			}
	 	}

	 	public function listAllClientInfo() {
	 		global $db;
	 		$all_clients = [];
	 		//create a query and execute it
			$results = $db->query("SELECT id, first_name, last_name FROM clients");

        	while ($row = $results->fetch_assoc()) {
            	$client = new Client(NULL, NULL, NULL, NULL, NULL);
            	$client->ID = $row["id"];
            	$client->first_name = $row["first_name"];
            	$client->last_name = $row["last_name"];

            	array_push($all_clients, $client);
        	}

        	$results->free();
        	return $all_clients;
	 	}

	 	public function updateClientInfo($id, $first, $last, $age, $bday) {
	 		global $db;
/*
	 		//get the updated values form
	 	 	$this->ID = $id;
	 		$this->first_name = $first;
			$this->last_name = $last;
			$this->age = $age;
			$this->birthday = $bday;
			//Probably can combine the bottom and top one to like $this->first_name = $db->real_escape_string($first);
			//Escapes out of special characters
			$this->first_name = $db->real_escape_string($this->first_name);
			$this->last_name = $db->real_escape_string($this->last_name);
			$this->age = $db->real_escape_string($this->age);
			$this->birthday = $db->real_escape_string($this->birthday);*/
			$this->ID = $db->real_escape_string($id);
			$this->first_name = $db->real_escape_string($first);
			$this->last_name = $db->real_escape_string($last);
			$this->age = $db->real_escape_string($age);
			$this->birthday = $db->real_escape_string($bday);
			
			//$update_query = "UPDATE clients SET first_name = '$first', last_name = '$last', age = '$age', date_of_birth = '$bday' WHERE id = $id";
			$update_query = "UPDATE clients SET first_name = '$this->first_name', last_name = '$this->last_name', age = '$this->age', date_of_birth = '$this->birthday' WHERE id = $this->ID";
			
			//test to make sure update worked
			if(mysqli_query($db, $update_query)) {
				return true;
			} 	else {
					return false;
				}
	 	}

	 	//should we do a list one client info?
		public function listClientInfo($id) {
			global $db;

	 		//create and execute a query
	 		$results = $db->query("SELECT * FROM clients WHERE id = $id");

	 		//get the first row of the return from the query
	 		$row = $results->fetch_assoc();

	 		$this->first_name = $row["first_name"];
			$this->last_name = $row["last_name"];
			$this->age = $row["age"];
			$this->birthday = $row["date_of_birth"];
	 	}

	 	
	}

?>
