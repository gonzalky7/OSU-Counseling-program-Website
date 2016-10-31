<?php

	$db = new mysqli($server, $username, $password, $dbname);


	include("db_connect.php")
	
	$sql = "INSERT INTO `patients` (`ID`,`first_name`, `last_name`, `age`, `date_of_birth`) VALUES ( NULL,'$_POST[firstName]',
	 '$_POST[lastName]', '$_POST[age]', '$_POST[birthday]')";

	if(mysqli_query($db, $sql)){
    	echo "Thank you. Record added successfully.";
	} else{
    	echo "ERROR: Could not execute $sql. " . mysqli_error($db);
	}

 
	// Close connection
	mysqli_close($db);
?>

<? include('header.php') ?>
		<a href="/" class="tag">
			<div class="banner">
				<img src="http://osucascades.edu/sites/osucascades.edu/modules/osu_cascades_top_hat/images/osu_cascades_logo.png" class="logo" alt="Oregon State University Cascades">
			</div>
		</a>
	<body>
	<h1>Thank you...</h1>
	</body>
<? include('footer.php') ?> 
