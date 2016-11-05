<?php include("../includes/header.php") ?>

<?php include("../db_connect.php") ?>

<div class="wrapper">
	<div class="main-content">

		<?php

			$id = $_GET["id"];
//again $db for db.humanoriented.com is db_oneteam
			$res = $db->query("DELETE FROM clients WHERE id=$id");

			if($res){
			echo "<h1>Recorded successfully deleted</h1>";
			}else {
			echo "<h1>Error deleting record: " . $db->error . "</h1>";
			}

			$db->close();

		?>
	</div>
</div>

<?php include("../includes/footer.php") ?>