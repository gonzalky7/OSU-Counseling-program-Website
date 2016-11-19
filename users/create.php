<?php
	ob_start();
	include("../includes/header.php");
	include("../includes/db_connect.php");

	//For the db.humanoriented.com the $dbname is db_oneteam not cascades_clinic
	//$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

	include("../classes/user.class.php");


	//For security checking for login id if not redirected to login page
	if (!isset($_SESSION['user_id']))
	{	
    header("Location: login.php");
    die();
	}


	//strings to outout on function success/failure
	$success = "Record saved successfully.";
	$failed = "Error: could not save user info.";
	$output = "";

	//create a new client object and pass to it the values from the form
	$new_user = new User($_POST['firstName'], $_POST['lastName'],
		$_POST['userName'], $_POST['password']);

	//call our save function and it returns true print success else print failure
	if($new_user->saveUserInfo()){
		$output = $success;
	} else {
		$output = $failed;
	}

	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";
	echo "<h1 style=\"text-align: center;\">"; echo "$output"; echo "</h1>";
	echo "    </div>";
	echo "</div>";

	include("includes/footer.php");
	header("Refresh:3; list_users.php");
?>
