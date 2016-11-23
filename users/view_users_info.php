<?php include("../includes/header.php") ?>

<?php include("../includes/db_connect.php") ?>

<div class="wrapper">
	<div class="main-content">

<?php

//For security checking for login id if not redirected to login page
if (!isset($_SESSION["user_id"]))
{
    header("Location: login.php");
    die();
}

$id = $_GET["id"];
$res = $db->query("SELECT * FROM users WHERE id=$id");
$row = $res->fetch_assoc();

?>
	<table class="list-table">
		<tr>
			<th><?php echo $row["first_name"] . " " . $row["last_name"]; ?></th>
		</tr>
		<tr>
			<td><strong>Username: </strong><?php echo $row["username"];?></td>
		</tr>
		<tr>
			<td><strong>role_id: </strong><?php echo $row["role_id"]; ?></td>
		</tr>
	</table>

	<?php $db->close(); ?>

	</div>
</div>

<?php include("includes/footer.php") ?>