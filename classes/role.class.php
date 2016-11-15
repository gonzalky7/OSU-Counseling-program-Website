<?php 

    include("../includes/db_connect.php");




    class Role {
        public $id;
        public $name;

        public function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
        }

        private static $sql_select = "SELECT * FROM roles ORDER BY name";

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

        public function saveRoleInfo() {
            global $db;

            //Create the query to save the role
            $save_query = "INSERT INTO roles (id, name) VALUES ('{$this->id}', '{$this->name}')";

            //check to make sure it worked
            if(mysqli_query($db, $save_query)) {
                return true;
            }   else {
                    return false;
                }
        }

        public function listRoleInfo($id) {
            global $db;

            //create and execute a query
            $results = $db->query("SELECT * FROM roles WHERE id = $id");

            //get the first row of the return from the query
            $row = $results->fetch_assoc();

            $this->id = $row['id'];
            $this->name = $row['name'];
        }

        //Update
        public function updateRoleInfo($id, $name) {
            global $db;

            //get the updated values form
            $this->id = $id;
            $this->name = $name;

            $update_query = "UPDATE roles SET id = '$id', name = '$name' WHERE id = $id";

            //test to make sure update worked
            if(mysqli_query($db, $update_query)) {
                return true;
            }   else {
                    return false;
                }
        }

        //Delete
        public function deleteRole() {
            global $db;

            //get the id to be deleted
            $idToDelete = $_GET["id"];

            //create a query
            $delete_query = $db->query("DELETE FROM roles WHERE id = $idToDelete");

            //test to see if it was successful
            if($delete_query) {
                return true;
            }   else {
                    return false;
                }
        }



    }

?>
