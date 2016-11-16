<?php
	ob_start();
	include("../includes/header.php");
	include("../classes/user.class.php");

//For security checking for login id if not redirected to login page




//	$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
	$user = new User("","","","");


	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";

	if($user->deleteUser()){
	 	echo "<h1>Record successfully deleted</h1>";
	 	header('Refresh:3; list_users.php');
	}else {
	 	echo "<h1>Error deleting record: " . $db->error . "</h1>";
		header('Refresh:3; list_users.php');
	}

	echo "    </div>";
	echo "</div>";

	include("../includes/footer.php");

?>