<?php 
	include('includes/header.php');
	include("includes/db_connect.php");
	include("classes/user.class.php");

	$new_session = new User("", "", "", "");

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$new_session->username = $_POST['username'];
		$new_session->password = $_POST['password'];

		if($new_session->validateUser()){
			header('Location: index.php'); 
		} else {
			header('Location: login.php');
		}
	}

	include('includes/footer.php');
?>