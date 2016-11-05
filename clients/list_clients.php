<?php include("../includes/header.php") ?>

<?php include("../db_connect.php") ?>

<div class="wrapper">
	<div class="main-content">

<?php

//again $db is db.humanoriented.com is db_oneteam
$db = new mysqli($server, $username, $password, $dbname); //had to add this line to get it to work on mine
$res = $db->query("SELECT id, first_name, last_name FROM clients"); ?>
	<table class="list-table">
		<tr>
			<th>Name</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	<?php while($row = $res->fetch_assoc()) { ?>
		<tr>
			<td><a href="view_patient_info.php?id=<?php echo $row['id']; ?>">
				<?php echo $row['first_name'] . " " . $row['last_name']; ?></a>
			</td>
			<td><a style="color: red; text-decoration: none; text-align: center;" href="delete.php?id=<?php echo $row['id']; ?>">X</a></td>
 			<td><a style="color: Green; text-decoration: none; text-align: center;" href="update.php?id=<?php echo $row['id']; ?>">&#10003</a></td>

	<?php } ?></table>

	<?php $db->close(); ?>

	</div>
</div>

<?php include("../includes/footer.php") ?>
