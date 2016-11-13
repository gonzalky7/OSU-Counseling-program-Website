<?php
/* Session Functions
 * These functions abstract the details of working with sessions.
*/

// Returns a User object or NULL if no user is logged in.
function currentUser() {
  return $_SESSION['user_name'];
  
  // return $_SESSION['currentUser'];
}

?>