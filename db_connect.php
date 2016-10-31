<?php
	$db = new mysqli("localhost", "root", "root", "cascades_clinic");

	if($db->connect_errno){
		echo "Failed to connect to MySQL";
		exit;
	}else {
		echo "Succesfully connected \n";
	}

	$res = $db->query("SELECT ID, first_name FROM patients");
?>


<ol>
<?php while($row = $res->fetch_assoc()) { ?>
   <li> First name: <a href="patients.php?ID= <?php echo $row['ID']; ?>"> <?php echo $row['first_name']; ?></a>
   <a href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a> </li><br>
<?php } ?>  </ol>