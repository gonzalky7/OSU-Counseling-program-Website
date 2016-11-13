<?php
	/*The user class represents a user of our system. The user class should represent the user's important data as well as the actions a user should be able to take.*/
	include("../includes/db_connect.php");

	class User {
		public $id;
		public $first_name;
		public $last_name;
		public $username;
		public $password;
		public $role_id;

		//What kinds of things will users be able to do...?
	private static $sql_select = "SELECT * FROM users ORDER BY id;";

    // Returns an array of User objects, based on data in the persistence layer.
    public static function loadUsers() {
        global $db;
        $all_users = [];
        $results = $db->query(self::$sql_select);
        while ($row = $results->fetch_assoc()) {
            $user = new User();
            $user->id = $row['id'];
            $user->first_name = $row['first_name'];
            array_push($all_users, $user);
        }
        $results->free();
        $db->close();
        return $all_users;
    }

		//Create
		public static function create() {
			global $db;

			//create a query and fill it with passed values

			//error check it

			//close connection

		}


		//Read
		public function listUserInfo($id){
			global $db;

	 		//create and execute a query
	 		$results = $db->query("SELECT * FROM users WHERE id = $id");

	 		//get the first row of the return from the query
	 		$row = $results->fetch_assoc();

	 		$this->first_name = $row['first_name'];
			$this->last_name = $row['last_name'];
			$this->username = $row['username'];
			$this->password = $row['password'];
			$this->role_id = $row['role_id'];
	 	}

		//Update
		public function updateUserInfo($id, $first, $last, $username, $password, $role_id){
	 		global $db;

	 		//get the updated values form
	 	 	$this->ID = $id;
	 		$this->first_name = $first;
			$this->last_name = $last;
			$this->username = $username;
			$this->password = $password;
			$this->role_id = $role_id;

			$update_query = "UPDATE users SET first_name = '$first', last_name = '$last', username = '$username', password = '$password', role_id = '$role_id' WHERE id = $id";

			//test to make sure update worked
			if(mysqli_query($db, $update_query)){
				return true;
			} else {
				return false;
			}
	 	}

		//Delete


	}



?>