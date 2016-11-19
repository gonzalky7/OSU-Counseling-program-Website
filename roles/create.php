<?php
	ob_start();
	include("includes/header.php");
	include("includes/db_connect.php");

	//For the db.humanoriented.com the $dbname is db_oneteam not cascades_clinic
	//$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

	include("classes/role.class.php");


	//strings to outout on function success/failure
	$success = "Record saved successfully.";
	$failed = "Error: could not save role info.";
	$output = "";

	//create a new role object and pass to it the values from the form
	$new_role = new Role($_POST['id'], $_POST['name']);

	//call our save function and it returns true print success else print failure
	if($new_role->saveRoleInfo()){
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