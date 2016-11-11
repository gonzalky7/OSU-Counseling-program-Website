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

	 	public function __construct($id, $first, $last, $age, $bday){
	 		$this->ID = $id;
	 		$this->first_name = $first;
	 		$this->last_name = $last;
	 		$this->age = $age;
	 		$this->birthday = $bday;
	 	}


	 	public function saveClientInfo(){
	 		global $db;

	 		//Create the query to save the client
	 		$save_query = "INSERT INTO clients (id, first_name, last_name, age, date_of_birth) VALUES ( '{NULL}', '{$this->first_name}', '{$this->last_name}', '{$this->age}', '{$this->birthday}')";

	 		//check to make sure it worked
	 		if(mysqli_query($db, $save_query)) {
	 			return true;
	 		} else {
	 			return false;
	 		}
	 		//close database connection
	 		mysqli_close($db);
	 	}

	 	public function deleteClient(){
	 		global $db;

	 		//get the id to be deleted
	 		$idToDelete = $_GET["id"];

	 		//create a query
	 		$delete_query = $db->query("DELETE FROM clients WHERE id = $idToDelete");

	 		//test to see if it was successful
	 		if($delete_query){
	 			header("Refresh:3; list_clients.php");
	 			return true;
	 		} else {
	 			header("Refresh:3; list_clients.php");
	 			return false;
	 		}

	 		//close connection
	 		$db->close();
	 	}

	 	public function listClientInfo(){
	 		//create a query and execute it

	 		//while there are results print them

	 		//close connection

	 	}

	 	public function updateClientInfo(){
	 		//get the ID

	 		//create and execute a query

	 		//get the first row of the return from the query

	 		//get the updated values form

	 		//construct a new query string

	 		//execute and test the query

	 		//close connection
	 		
	 	}


	}


?>
