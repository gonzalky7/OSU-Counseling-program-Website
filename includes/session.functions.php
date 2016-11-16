<?php
/* Session Functions
 * These functions abstract the details of working with sessions.
*/
	include("db_connect.php");

	// Returns a User object or NULL if no user is logged in.
	function currentUser() {
  		if (isset($_SESSION['user_id'])) {
  			return true;
  		} else return false;	
 	}
	
  	function currentUserName(){
    	if (isset($_SESSION['user_name'])) {
  	 		return $_SESSION['user_name'];
    	} else return NULL;
  	}

  	//return $_SESSION['currentUser'];
  	function validateUser($username, $password) {
    	global $db;

      	$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";

      	//Kyleen: Can someone change the res variable to something more descriptive. I am still unsure about this line of code THanks 
      	$res = $db->query($query);

      	if ($res && $res->num_rows == 1) {
        	$row = $res->fetch_assoc();
        	$user_id = $row['id'];

        	//Declaring global session variables
        	$_SESSION['user_id'] = $user_id;
        	$_SESSION['user_name'] = $username;
    
        	return true;
      	} 	else { 
        		$_SESSION['message'] = 'Invalid username/password';
        		return false; 
      		} 

    }

?>