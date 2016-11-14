<?php 
	include('session.functions.php');
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
			<p class="demo">Welcome, <?php echo currentUserName() ?> </p>
		</div>

<?php
		if (currentUser()) {
			include("admin-nav.php");
  		}
  		else {
  			include("anon-nav.php");
  		}
?>


