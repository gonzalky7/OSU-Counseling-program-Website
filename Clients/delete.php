<?php 
	ob_start();
	include("../includes/header.php");
	include("../db_connect.php");

	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";

	//$db = new mysqli($server, $username, $password, $dbname);
	$id = $_GET["id"];
	//again $db for db.humanoriented.com is db_oneteam
	$res = $db->query("DELETE FROM clients WHERE id=$id");

	if($res){
		echo "<h1>Recorded successfully deleted</h1>";
		header('Refresh:3; list_clients.php');
	}else {
		echo "<h1>Error deleting record: " . $db->error . "</h1>";
		header('Refresh:3; list_clients.php');
	}

	$db->close();

		
	echo "    </div>";
	echo "</div>";

	include("../includes/footer.php");

?>