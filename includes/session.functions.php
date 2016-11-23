<?php
/* Session Functions
 * These functions abstract the details of working with sessions.
*/
	include("db_connect.php");

	// Returns a User object or NULL if no user is logged in.
	function currentUser() {
  		if (isset($_SESSION["user_id"])) {
  			return true;
  		} else return false;
 	}

  	function redirectIfNotLoggedIn() {
      include("public_urls.include.php");

      if (in_array(basename($_SERVER["REQUEST_URI"]), $allowableURLS) || isset($_SESSION["user_id"])) {
          return;
      } else if (!isset($_SESSION["user_id"])) {
          header("Location: /login.php");
          die();
      }
  	}

  	function currentUserName(){
    	if (isset($_SESSION["user_name"])) {
  	 		return $_SESSION["user_name"];
    	} else return NULL;
 	 }

  	//return $_SESSION['currentUser'];
  	function validateUser($username, $password) {
    	global $db;
//		$db->query("DELETE FROM users WHERE id = $idToDelete");
//		$query = "SELECT password, id FROM users WHERE username = 'username'";
		$res = $db->query("SELECT password, id FROM users WHERE username = '$username'");
		$row = $res->fetch_assoc();
		$passHash = $row["password"];
		if(password_verify($password, $passHash)){
        	$user_id = $row["id"];

        	//Declaring global session variables
        	$_SESSION["user_id"] = $user_id;
        	$_SESSION["user_name"] = $username;

        	return true;
      	} 	else {
        		$_SESSION["message"] = "Invalid username/password";
        		return false;
      		}

    }


    function errorMessageLogin(){
       if (isset($_SESSION["message"])) {
          echo $_SESSION["message"];
          unset($_SESSION["message"]);
        } 
    }

?>