
<?php include("../includes/header.php") ?>

<?php
	include("../db_connect.php");

	#$db = new mysqli($server, $username, $password, $dbname);

	


	$sql = "INSERT INTO `patients` (`ID`,`first_name`, `last_name`, `age`, `date_of_birth`) VALUES ( NULL,'$_POST[firstName]',
	 '$_POST[lastName]', '$_POST[age]', '$_POST[birthday]')";

	if(mysqli_query($db, $sql)){
    	echo "<h1>Thank you</h1>";
    	echo "<p>Your record was successfuly added.</p>";
	} else{
    	echo "ERROR: Could not execute $sql. " . mysqli_error($db);
	}
 
	// Close connection
	mysqli_close($db);

?>

<?php include("footer.php") ?>