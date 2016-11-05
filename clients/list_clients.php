<?php include("../includes/header.php") ?>

<?php include("../db_connect.php") ?>

<div class="wrapper">
	<div class="main-content">

<?php 
//again $db is db.humanoriented.com is db_oneteam 
$res = $db->query("SELECT ID, first_name, last_name FROM patients"); ?>
	<table class="list-table">
		<tr>
			<th>Name</th>
			<th>Delete</th>
		</tr>
	<?php while($row = $res->fetch_assoc()) { ?> 
		<tr>
			<td><a href="view_patient_info.php?ID=<?php echo $row['ID']; ?>"> 
				<?php echo $row['first_name'] . " " . $row['last_name']; ?></a>
			</td>
 			<td><a style="color: red; text-decoration: none; text-align: center;" href="delete.php?ID=<?php echo $row['ID']; ?>">X</a></td> 

	<?php } ?></table>

	<?php $db->close(); ?>

	</div>
</div>

<?php include("../includes/footer.php") ?> 
