<?php
/* A Role represents the role a user plays in the system, and corresponds
 * to a role in the real world. Roles provide semantics around "what kind of
 * user" someone is, and allows the system to dictate what they are allowed
 * to do. For example "Only admins and directors have the ability to do"
 * everything," or, "If the user isn't a Counselor, don't show them the
 * special puppy picture."
 */
include("../includes/db_connect.php");
	  $db = new mysqli($server, $username, $password, $dbname);
class Role {
    public $id;
    public $name;

    private static $sql_select = "SELECT * FROM roles ORDER BY name;";

    // Returns an array of Role objects, based on data in the persistence layer.
    public static function load() {
        global $db;
        $all_roles = [];
        $results = $db->query(self::$sql_select);
        while ($row = $results->fetch_assoc()) {
            $role = new Role();
            $role->id = $row['id'];
            $role->name = $row['name'];
            array_push($all_roles, $role);
        }
        $results->free();
        $db->close();
        return $all_roles;
    }

    // Returns a role object. Provided an id, retrieves the data from the
    // persistence layer, and returns an appropriate Role object.
    public static function load_one($id) {
        // Hmmm...
    }

    

}

?>
