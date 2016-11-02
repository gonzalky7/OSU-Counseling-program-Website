<? include("header.php") ?>

<?php
	include("db_connect.php");
	#Create an array of all entries in the db
	$get = "SELECT * FROM patients ORDER BY id";
	$resultArray = mysqli_query($db, $get);

	#if entries are found
	if (resultArray->num_rows != 0){

		echo "<h1>Patients</h1>";
		echo "<table> <th>First Name</th> <th>Last Name</th> <th>Age</th> <th>Brithday</th> <th>Address</th>";
		while ($rows = $resultArray->fetch_assoc()){
			$first = $rows['first_name'];
			$last = $rows['last_name'];
			$age = $rows['age'];
			$bday = $rows['date_of_birth'];
			$addr = $rows['address'];



		}
		echo "</table>";

	} else {
		#print an error because nothing was found
		echo "Error: No entries found";
	}

?>

<? include("footer.php") ?> 