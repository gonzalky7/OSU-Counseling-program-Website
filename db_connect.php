<?php
	//Store these variables in the database
	$date = $_POST["date"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$age = $_POST["age"];
	$dob = $_POST["birthday"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];

	//Create connection with the database
	$server = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "cascades_clinic";

	$db = new mysqli($server, $username, $password, $dbname);

	if($db->connect_errno){
		die("Connection failed: " . $db->connect_error);
	}
	//Connected to DB

	//Search db for existing entry; update if exists, create if not
	// $query = "SELECT * FROM 'patients' WHERE 'firstName' = '$firstName'";
	// $sqlsearch = mysql_query($query);
	// $resultcount = mysql_numrows($sqlsearch);

	// if ($resultcount > 0){
	// 	mysql_query("UPDATE patients SET
	// 					'date' = '$date',
	// 					'firstName' = '$firstName',
	// 					'lastName' = '$lastName',
	// 					'age' = '$age',
	// 					'birthday' = '$dob',
	// 					'address' = '$address',
	// 					'city' = '$city',
	// 					'state' = '$state',
	// 					'zip' = '$zip',
	// 					'phone' = '$phone'
	// 					WHERE 'firstName' = '$firstName'")
	// 	or die(mysql_error());
	// } else {
	// 	//TO DO
	// }

	//$res = $db->query("SELECT id, first_name FROM patients");

	$res = $db->query("SELECT ID, first_name FROM patients");

?>


<ol>
<?php while($row = $res->fetch_assoc()) { ?>

    <li>First name: <a href="patient.php?id=<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></a></li>
<?php } ?>

<? include('header.php') ?>

	<body class="home">
			<div class="banner">
				<img src="http://osucascades.edu/sites/osucascades.edu/modules/osu_cascades_top_hat/images/osu_cascades_logo.png" class="logo" alt="Oregon State University Cascades">

			</div>

       <div class="mainBox">

       	<div class="welcome-header">
       		<h2>Your information has successfully been submitted.</h1>
      		<h1>Thank you!</h2>

      		<ul>
			<?php while($row = $res->fetch_assoc()) { ?>
    		<li>First name: <a href="patient.php?id=<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></a></li>
			<?php } ?>

        </div>

       </div>


<? include('footer.php') ?>

   <li> First name: <a href="patients.php?ID= <?php echo $row['ID']; ?>"> <?php echo $row['first_name']; ?></a>
   <a href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a> </li><br>
<?php } ?>  </ol>
