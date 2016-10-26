<?php
	$db = new mysqli("localhost", "root", "root", "cascades_clinic");

	if($db->connect_errno){
		echo "Failed to connect to MySQL";
		exit;
	}else {
		echo "Succesfully connected \n";
	}

	$res = $db->query("SELECT id, first_name FROM patients");
?>

<ul>
<?php while($row = $res->fetch_assoc()) { ?>
    <li>First name: <a href="patient.php?id=<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></a></li>
<?php } ?>