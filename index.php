<?php 
	ob_start();
	session_start();

	include('includes/header.php');


	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			echo "You're logged in.";
		}else{
			echo "Not logged in." . $_SESSION['user_id'];
	}
?>

<div class="wrapper">	
        <div class="mainBox">
       		<div class="welcome-header">
       			<h1>Welcome to the OSU Counseling Clinic!</h1>
				    <a href="form.php" class="button">Registration Form</a>
       		</div>
       	</div>
</div>
<?php include('includes/footer.php') ?>