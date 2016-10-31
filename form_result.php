<? php
	$db = new mysqli("localhost", "root", "root", "cascades_clinic");

	$sql = "INSERT INTO `patients` (`ID`,`first_name`, `last_name`, `age`, `date_of_birth`) VALUES ( NULL,'$_POST[firstName]',
	 '$_POST[lastName]', '$_POST[age]', '$_POST[birthday]')";

	if(mysqli_query($db, $sql)){
    	echo "Thank you Record added successfully.";
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
 
	// Close connection
	mysqli_close($db);
?>

<? include('header.php') ?>
	<body>
	<h1>Thank you...</h1>
	</body>
<? include('footer.php') ?>
