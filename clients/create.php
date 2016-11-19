<?php
	ob_start();
	include("includes/header.php");
	include("includes/db_connect.php");

	//For the db.humanoriented.com the $dbname is db_oneteam not cascades_clinic
	//$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

	include("classes/client.class.php");


	//strings to outout on function success/failure
	$success = "Record saved successfully.";
	$failed = "Error: could not save client info.";
	$output = "";

	//create a new client object and pass to it the values from the form
	$new_client = new Client(NULL, $_POST['firstName'], $_POST['lastName'],
		$_POST['age'], $_POST['birthday']);

	//call our save function and it returns true print success else print failure
	if($new_client->saveClientInfo()){
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
	header("Refresh:3; index.php");
?>
