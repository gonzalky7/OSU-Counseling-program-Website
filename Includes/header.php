<?php include('session.functions.php') ?>
<?php include('session_new.php') ?>

<?php 
ob_start();
session_start();

 ?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OSU-Cascades Counseling Practicum</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/form.css">
		<link rel="stylesheet" type="text/css" href="/css/login.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
		<link rel="stylesheet" type="text/css" href="/css/about.css">

	</head>

	<body>
		<div class="banner">
			<a href="/index.php"><img src="http://osucascades.edu/sites/osucascades.edu/modules/osu_cascades_top_hat/images/osu_cascades_logo.png" class="logo" alt="Oregon State University Cascades"></a>




			<p class="demo">  <?php echo currentUserName() ?> </p>


     	   </body>
		</div>

		 </body>


<?php
		if (currentUser()) {
			echo "<div class=\"navBar\">";
       			echo "<ul>";
  				echo "<li><a class=\"active\" href=\"/index.php\">Home</a></li>";
  				echo "<li><a href=\"/clients/list_clients.php\">Clients</a></li>";
  				echo "<li><a href=\"/users\">Users</a></li>";
        		echo "<li><a href=\"/roles\">Roles</a></li>";
  				echo "<li><a href=\"/about.php\">About</a></li>";
        		echo "<li><a href=\"logout.php\">Logout</a></li>";
				echo "</ul>";
  			echo "</div>";
  		}
  		else {
  				echo "<div class=\"navBar\">";
       			echo "<ul>";
  				echo "<li><a href=\"/about.php\">About</a></li>";
  				echo "<li><a href=\"../login.php\">Login</a></li>";
        		
				echo "</ul>";
  			echo "</div>";
  		}
?>


