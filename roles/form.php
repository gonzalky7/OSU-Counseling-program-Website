<?php
	include('includes/header.php');
?>

	<div class="wrapper">

	<form method="post" action="create.php">
		<fieldset>
			<div class="centerTitle"><legend><h1 id="header">Create a new Role</h1></legend></div>
			<label for="id">ID</label>
			<input type="text" name="id" placeholder="id"/>

			<label for="name">Name</label>
			<input type="text" name="name" placeholder="name">

			<input type="submit" name="Submit"/>
		</fieldset>
	</form>

	</div>

<?php 
	include("includes/footer.php");
?>