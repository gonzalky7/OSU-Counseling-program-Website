<?php 
	ob_start();
	include("../includes/header.php");
	include("../classes/client.class.php");

	//strings to outout on function success/failure
	$success = "Record saved successfully.";
	$failed = "Error: could not save client info.";
	$output = "";

	//create a new client object and pass to it the values from the form
	$new_client = new Client(NULL, $_POST['firstName'], $_POST['lastName'], 
		$_POST['age'], $_POST['birthday']);

	//call our save function and it returns true print success else print failure
	if($new_client->saveClientInfo()){
		$output = $success;
	} else {
		$output = $failed;
	}

?>

	<div class="wrapper">
		<div class="main-content">
			<h2 style="text-align: center;"><?php echo "$output";?></h2>
		</div>
	</div>
