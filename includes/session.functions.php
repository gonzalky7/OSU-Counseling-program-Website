<?php
/* Session Functions
 * These functions abstract the details of working with sessions.
*/

// Returns a User object or NULL if no user is logged in.
function currentUser() {
  if (isset($_SESSION['user_id'])) {
  	return true;
  } else {
  	return false;
  }
 }
//return $_SESSION['user_name'];
  function currentUserName(){
    if (isset($_SESSION['user_name'])) {
  	 return $_SESSION['user_name'];
    } else {
      return NULL;
    }
  }
  //return $_SESSION['currentUser'];

?>