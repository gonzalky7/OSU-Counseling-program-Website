<?php include("../includes/header.php") ?>

<?php include("../db_connect.php") ?>

<?php 

$id = $_GET["ID"];

$res = $db->query("DELETE FROM 'patients' WHERE ID=$id");

if( $db->query($res) === TRUE){
	echo "Recorded successfully deleted"; 
}else {
	echo "Error deleting record: " . $db->error;
}

$db->close();

?>

<?php include("../includes/footer.php") ?> 