<?php include('includes/header.php') ?>
	<div class="wrapper">
   	<div class="mainBox">
   		<div class="welcome-header">
   			<h1>Log In</h1>
		    <form action="session_new.php" method="POST">
          <label name="username">Username</label><br />
          <input type="text" name="username" /><br />
          <br />
          <label name="password">Password</label><br />
          <input type="text" name="password" /><br />
          <br />
          <input type="submit" value="Log In" />
        </form>
   		</div>
   	</div>
    </div>
<?php include('includes/footer.php') ?>