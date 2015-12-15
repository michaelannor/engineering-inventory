<?php

/**
 * author: Michael Annor
 * date: 15th November, 2015
 * description: Class with queries to access the se_inventory_users table
 */

include_once ("adb.php");

class user extends adb {

/**
 * [[The verify_user function checks if a user exists]]
 * @param [[int]] $user
 */
  function verify_user($user){
    $str_query = "select user_id from se_inventory_users where user_id='$user'";
    if(!$this->query($str_query)){
      return false;
    }
    else {
      return true;
    }
  }


}


?>
