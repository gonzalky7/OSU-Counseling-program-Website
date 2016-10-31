<?php
	$db = new mysqli("localhost", "root", "root", "cascades_clinic");

	

	$res = $db->query("SELECT ID, first_name, last_name FROM patients");
?>



<?php 
	$ID = $_GET['ID'];
	if( ! is_numeric($ID) )
  	die('invalid  id');
	$query = "SELECT * FROM `patients` WHERE `ID` =$ID ORDER BY 'ID'";

	$row = $res->fetch_assoc()  ?>ß
    First name:  <?php echo $row['first_name']; ?> <br>
    Last name:  <?php echo $row['last_name']; ?> 




<?php  ?> 