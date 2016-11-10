	<?php 
	ob_start();
	include("../includes/header.php");
	include("../classes/client.class.php");

	//For the db.humanoriented.com the $dbname is db_oneteam not cascades_clinic
	//$db = new mysqli($server, $username, $password, $dbname);

	// $sql = "INSERT INTO clients (id, first_name, last_name, age, date_of_birth) VALUES ( NULL,'$_POST[firstName]',
	//  '$_POST[lastName]', '$_POST[age]', '$_POST[birthday]')";

	// echo "<div class=\"wrapper\">";
	// echo "    <div class=\"main-content\">";

	// if(mysqli_query($db, $sql)){
	// 	echo "<h1>Thank you</h1>";
 //    	echo "<p style=\"text-align: center\">Your record was successfuly added.</p>";
 //    	header('Refresh:5; ../index.php');
	// } else{
 //    	echo "ERROR: Could not execute $sql. " . mysqli_error($db);
 //    	header('Refresh:5; ../index.php');
	// }

	// echo "    </div>";
	// echo "</div>";

	// // Close connection
	// mysqli_close($db);

	// include("../includes/footer.php"); 

	$success = "Record saved successfully.";
	$failed = "Error: could not save client info.";

	$new_client = new Client(NULL, $_POST[firstName], $_POST[lastName], 
		$_POST[age], $_POST[birthday]);

	echo $new_client->ID;
	echo $new_client->first_name;
	echo $new_client->last_name;
	echo $new_client->age;
	echo $new_client->birthday;



	if($new_client->saveClientInfo()){
		echo "$success";
	} else {
		echo "$failed";
	}

?>
