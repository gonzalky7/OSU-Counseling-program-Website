<?php
	/*The user class represents a user of our system. The user class should represent the user's important data as well as the actions a user should be able to take.*/
	include("../db_connect.php");

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

		//Update

		//Delete


	}



?>