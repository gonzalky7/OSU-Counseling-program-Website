<?php include("../includes/header.php") ?>

<?php include("../db_connect.php") ?>

<div class="wrapper">
	<div class="main-content">

<?php 

$id = $_GET["ID"];
$res = $db->query("SELECT * FROM patients WHERE ID=$id");
$row = $res->fetch_assoc();

?>
	<table class="list-table">
		<tr>
			<th><?php echo $row['first_name'] . " " . $row['last_name']; ?></th>
		</tr>
		<tr>
			<td>Age: <?php echo $row['age'];?></td>
		</tr>
		<tr>
			<td>Birthday: <?php echo $row['date_of_birth']; ?></td>
		</tr>
		<tr>
			<td>Address: <?php echo $row['address']; ?></td>
		</tr>
	</table>

	<?php $db->close(); ?>

	</div>
</div>

<?php include("../includes/footer.php") ?> 