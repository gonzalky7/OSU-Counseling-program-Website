<?php include("../includes/header.php") ?>

<?php include("../db_connect.php") ?>

   <div class="navBar">
       		<ul>
  			<li><a class="active" href="../index.php">Home</a></li>
  			<li><a href="../clients/list_clients.php">Clients</a></li>
  			<li><a href="#Users">Users</a></li>
  			<li><a href="#about">About</a></li>
			</ul>
  </div>	

<?php 

$res = $db->query("SELECT ID, first_name FROM patients"); ?>
<ol>
<?php while($row = $res->fetch_assoc()) { ?> 
	 	<li> First name: <a href="view_patient_info.php?ID= <?php echo $row['ID']; ?>"> <?php echo $row['first_name']; ?></a>
 	<a href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a> </li><br>

<?php } ?> </ol>

<?php $db->close(); ?>

<?php
/*
 
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
*/
?>

<?php include("../includes/footer.php") ?> 