
<?php include("../includes/header.php") ?>

<?php
	ob_start();
	include("../db_connect.php");
	//For the db.humanoriented.com the $dbname is db_oneteam not cascades_clinic
	//$db = new mysqli($server, $username, $password, $dbname);

	$sql = "INSERT INTO clients (id, first_name, last_name, age, date_of_birth) VALUES ( NULL,'$_POST[firstName]',
	 '$_POST[lastName]', '$_POST[age]', '$_POST[birthday]')";

	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";

	if(mysqli_query($db, $sql)){
		echo "<h1>Thank you</h1>";
    	echo "<p style=\"text-align: center\">Your record was successfuly added.</p>";
	} else{
    	echo "ERROR: Could not execute $sql. " . mysqli_error($db);
	}

	echo "    </div>";
	echo "</div>";

	// Close connection
	mysqli_close($db);

?>

<?php include("../includes/footer.php") ?>
