<?php 
	include('../includes/header.php');
	include('../classes/role.class.php');

	$list_roles = new Role();
	$roles = $list_roles->load();
?>

	<div class="wrapper">
  	    <div class="content">
           <h2>Roles</h2>
           <table class="list-roles-table">

           <tr>
           <th>ID</th>
           <th>Role</th>
           </tr>
           <?php foreach ($roles as $value){
           			echo "<tr>";
           			echo "<td>" . $value->id . "</td>";
           			echo "<td>" . $value->name . "</td>";
           			echo "</tr>";
                 }
            ?>
           </table>
    	</div><!-- /content -->";
	</div><!-- /wrapper -->";

<?php
	$db->close();
	include('../includes/footer.php');
?>
