<?php 
	include("/includes/db_connect.php");

	/*The user class represents a user of our system. The user class should represent the user's important data as well as the actions a user should be able to take.*/
	
	class User {
		public $id;
		public $first_name;
		public $last_name;
		public $username;
		public $password;
		public $role_id;

		public function __construct($first, $last, $user, $pass) {
			$this->first_name = $first;
			$this->last_name = $last;
			$this->username = $user;
			$this->password = $pass;
		}

		//What kinds of things will users be able to do...?
		private static $sql_select = "SELECT * FROM users ORDER BY id;";

    	// Returns an array of User objects, based on data in the 	persistence layer.
    	public static function loadUsers() {
        	global $db;
        	$all_users = [];
        	$results = $db->query(self::$sql_select);

        	while ($row = $results->fetch_assoc()) {
            	$user = new User();
            	$user->id = $row["id"];
            	$user->first_name = $row["first_name"];
            	array_push($all_users, $user);
        	}
       		$results->free();
        	$db->close();
        	return $all_users;
    	}

		//Create
		public function saveUserInfo() {
			global $db;
			
			//Escapes out of special characters
			$this->first_name = $db->real_escape_string($this->first_name);
			$this->last_name = $db->real_escape_string($this->last_name);
			$this->username = $db->real_escape_string($this->username);
			$this->password = $db->real_escape_string($this->password);

			//create a query and fill it with passed values
			$save_query = "INSERT INTO users (first_name, last_name, username, password) VALUES ( '{$this->first_name}', '{$this->last_name}', '{$this->username}', '{$this->password}')";

			//error check it
			if(mysqli_query($db, $save_query)) {
	 			return true;
	 		} 	else {
	 				return false;
	 			}
		}


		//Read
		public function listUserInfo($id) {
			global $db;

	 		//create and execute a query
	 		$results = $db->query("SELECT * FROM users WHERE id = $id");

	 		//get the first row of the return from the query
	 		$row = $results->fetch_assoc();

	 		$this->first_name = $row["first_name"];
			$this->last_name = $row["last_name"];
			$this->username = $row["username"];
			$this->password = $row["password"];
			$this->role_id = $row["role_id"];
	 	}

		//Update
		public function updateUserInfo($id, $first, $last, $username, $password, $role_id) {
	 		global $db;

	 		//get the updated values form
/*	 	 	$this->ID = $id;
	 		$this->first_name = $first;
			$this->last_name = $last;
			$this->username = $username;
			$this->password = $password;
			$this->role_id = $role_id;*/
			
			$this->ID = $db->real_escape_string($id);
			$this->first_name = $db->real_escape_string($first);
			$this->last_name = $db->real_escape_string($last);
			$this->username = $db->real_escape_string($username);
			$this->password = $db->real_escape_string($password);
			$this->role_id = $db->real_escape_string($role_id);

			$update_query = "UPDATE users SET first_name = '$this->first_name', last_name = '$this->last_name', username = '$this->username', password = '$this->password', role_id = '$this->role_id' WHERE id = $this->ID";

			//test to make sure update worked
			if(mysqli_query($db, $update_query)) {
				return true;
			}	 else {
					return false;
				}
	 	}

		//Delete
	 	public function deleteUser() {
	 		global $db;

	 		//get the id to be deleted
	 		$idToDelete = $_GET["id"];

	 		//create a query
	 		$delete_query = $db->query("DELETE FROM users WHERE id = $idToDelete");

	 		//test to see if it was successful
	 		if($delete_query) {
	 			return true;
	 		} 	else {
	 				return false;
	 			}
	 	}

	}



?>