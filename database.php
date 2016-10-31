<?php

/*$_GET["firstName"]*/

$mysqli = new mysqli('localhost', 'root', '', 'cascades_clinic');

if ($mysqli->connect_errno){
	echo "Website is experiencing problems";
	
	exit;
}

echo "Successful";


/*	$res = $mysqli->query("Select firstName FROM patients");
	$test = $res->fetch_assoc();*/
?>


/*$sql = "SELECT actor_id, firstName, lastName FROM actor WHERE actor_id = $aid?"*/