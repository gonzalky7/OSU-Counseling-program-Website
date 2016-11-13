<?php include('includes/header.php'); ?>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	include("includes/db_connect.php");
	$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password';";
	$res = $db->query($query);
	$row = $res->fetch_assoc();
	echo "alpha";
	echo $row['id'];
	echo $query;
	if ($res && $res->num_rows == 1) {
		echo "beta";
		$row = $res->fetch_assoc();
		$user_id = $row['id'];
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $username;
		echo $row['id'];
		?>
		<h2>Successfully logged in.</h2>
		<p><a href="/">Go to Home</a></p>
	<?php } else { ?>
		<h2>Invalid username and password.</h2>
		<p><a href="login.php">Back to Log In</a></p>
<?php }
} else { ?>
	<h2>Please enter a username and password.</h2>
	<p><a href="login.php">Back to Log In</a></p>
<?php } ?>
<?php include('includes/footer.php') ?>
