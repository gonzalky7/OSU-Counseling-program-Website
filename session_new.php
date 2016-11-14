<?php include('includes/header.php'); ?>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	include("includes/db_connect.php");


	$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password';";

	$res = $db->query($query);
	if ($res && $res->num_rows == 1) {
		$row = $res->fetch_assoc();
		$user_id = $row['id'];
		//Declaring global session variables
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $username;
		
		header('Location: index.php'); 
	}	else{ 
			// <h2>Invalid username and password.</h2> -->
			//<p><a href="login.php">Back to Log In</a></p> -->
		 	$_SESSION['message'] = 'Invalid username/password'; 
		 	 header('Location: login.php');
   	 	    }


	}  ?>

<?php include('includes/footer.php') ?>
