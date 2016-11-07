<?php 
	ob_start(); 
	session_start();
 
 	include("db_connect.php");
	
	if (isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	}//TODO: else post message "Please Enter your username and password"

	if (!empty($username) && !empty($password)) {
		$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'"; 

		//echo $username;
		$res = $db->query($query);
		$row = $res->fetch_assoc();

		if ($res) {
			$row_cnt = $res->num_rows; 
		
			if ($row_cnt == 0 ) {
				echo 'Invalid username/password combination.'; 
			} else if ($row_cnt == 1){
				$user_id = $row['id'];
				$_SESSION['user_id'] = $user_id;
				header('Location: index.php');
			}
		
		}
	}


?>