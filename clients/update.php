<?php
	ob_start();
	include("../includes/header.php");
	include("../db_connect.php");

	//$db = new mysqli($server, $username, $password, $dbname);
	$id = $_GET["id"];
	$res = $db->query("SELECT * FROM clients WHERE id=$id");
	$row = $res->fetch_assoc();


	if(isset($_POST['update']))
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$age = $_POST['age'];
		$date_of_birth = $_POST['date_of_birth'];

		$sql = "UPDATE clients SET first_name='$first_name',last_name='$last_name',age='$age',date_of_birth='$date_of_birth' WHERE id=$id";

		if(mysqli_query($db, $sql)){
			echo "<h1>Thank you</h1>";
			echo "<p>Your record was successfuly added.</p>";
			header('Refresh:3; list_clients.php');
		} else{
			echo "ERROR: Could not execute $sql. " . mysqli_error($db);
			header('Refresh:3; list_clients.php');
		}
	}

?>


<div class="wrapper">
	<form method="post">
    	<table align="center">
    		<tr>
    		<td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $row['first_name']; ?>" required /></td>
    		</tr>
    		<tr>
    		<td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $row['last_name']; ?>" required /></td>
    		</tr>
    		<tr>
    		<td><input type="text" name="age" placeholder="age" value="<?php echo $row['age']; ?>" required /></td>
    		</tr>
			<tr>
			<td><input type="text" name="date_of_birth" placeholder="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" required /></td>
			</tr>
    		<tr>
    		<td>
    		<button type="submit" name="update"><strong>UPDATE</strong></button>
    		</td>
    		</tr>
    	</table>
    </form>
 </div>


<?php 
	$db->close();//Not sure what this line does -jack -> This line closes the connection to the database - Justin
	include("../includes/footer.php")
?>
