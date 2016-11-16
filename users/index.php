<?php
    include('../includes/header.php');
    include('../classes/user.class.php');


//For security checking for login id if not redirected to login page
redirectIfNotLoggedIn();



    $list_users = new User();
    $users= $list_users->loadUsers();
?>

    <div class="wrapper">
        <div class="content">
           <h2>Users</h2>
           <table class="list-roles-table">

           <tr>
           <th>ID</th>
           <th>Name</th>
           </tr>
           <?php foreach ($users as $value){
                    echo "<tr>";
                    echo "<td>" . $value->id . "</td>";
                    echo "<td>" . $value->first_name . "</td>";
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
