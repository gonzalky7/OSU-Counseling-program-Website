<?php
	include('../includes/header.php');
	include('../classes/role.class.php');

	$list_roles = new Role();
	$roles = $list_roles->load();
?>

	<div class="wrapper">
  	    <div class="main-content">
           <table class="list-table"> 
           <tr>
              <th>Roles</th>
              <th>ID</th>
              <th>Delete</th>
              <th>Edit</th>
           </tr>
           <?php foreach ($roles as $value){
           			echo "<tr>";
           			echo "<td>" . $value->name . "</td>";
           			echo "<td>" . $value->id . "</td>";
           			echo "</tr>";
                 }
            ?>
            <tr>
              <th><a href="form.php">Create New Role</a></th>
          </tr>
          </table>
    	</div><!-- /content -->";
	</div><!-- /wrapper -->";


<?php	include('../includes/footer.php'); ?>
