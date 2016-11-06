
<?php include("db_connect.php") ?>

<?php 

	if (isset($_POST['username'])&&isset($_POST['password'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
	}

	if (!empty($username)&&!empty($password)){
				echo 'Username password entered.';
	} else {
		echo 'Error no username or password entered ';
	}


if (!empty($username)&& !empty($password)) {
	$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'"; 

	//echo $username;
	$res = $db->query($query);

	if ($res) {
		$row_cnt = $res->num_rows; 
		
		if ($row_cnt == 0 ) {
			echo 'Invalid username/password combinations. '; 
		} else if ($row_cnt == 1){
			echo $username;
		}
		
	}
}


?>